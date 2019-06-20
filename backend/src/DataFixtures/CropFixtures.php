<?php

namespace App\DataFixtures;

use App\DataFixtures\Traits\TimestampableTrait;
use App\Entity\Crop;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\PropertyAccess\PropertyAccess;

class CropFixtures extends Fixture implements OrderedFixtureInterface
{

    use TimestampableTrait;

    const LAST_CROP_REFERENCE = 'last-crop';

    public function getOrder()
    {
        return 2;
    }

    public function load(ObjectManager $manager)
    {

        for ($i = 0; $i < 20; $i++) {
            $crop = $this->make(new Crop(), [
                "name" => "crop-$i",
            ]);
            $manager->persist($crop);
        }

        $manager->flush();
        $this->addReference(self::LAST_CROP_REFERENCE, $crop);
    }

    public function make(Crop $crop, $data)
    {
        $accessor = PropertyAccess::createPropertyAccessorBuilder()
            ->enableExceptionOnInvalidIndex()
            ->getPropertyAccessor();

        $name = $accessor->getValue($data, '[name]');

        $crop->setName($name);

        $this->timestamp($crop);

        return $crop;
    }
}
