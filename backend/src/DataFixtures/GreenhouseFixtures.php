<?php

namespace App\DataFixtures;

use App\DataFixtures\Traits\TimestampableTrait;
use App\Entity\Greenhouse;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\PropertyAccess\PropertyAccess;

class GreenhouseFixtures extends Fixture implements OrderedFixtureInterface
{
    use TimestampableTrait;

    const LAST_GREENHOUSE_REFERENCE = 'last-greenhouse';

    public function getOrder()
    {
        return 4;
    }

    public function load(ObjectManager $manager)
    {
        $unit = $this->getReference(UnitFixtures::LAST_UNIT_REFERENCE);

        for ($i = 0; $i < 20; $i++) {
            $greenhouse = $this->make(new Greenhouse(), [
                "code" => "Greenhouse-$i",
                "unit" => $unit,
                "acreage" => 0.99,
            ]);
            $manager->persist($greenhouse);
        }

        $manager->flush();
        $this->addReference(self::LAST_GREENHOUSE_REFERENCE, $greenhouse);
    }

    public function make(Greenhouse $greenhouse, $data)
    {
        $accessor = PropertyAccess::createPropertyAccessorBuilder()
            ->enableExceptionOnInvalidIndex()
            ->getPropertyAccessor();

        $code = $accessor->getValue($data, '[code]');
        $unit = $accessor->getValue($data, '[unit]');
        $acreage = $accessor->getValue($data, '[acreage]') ?: 0;

        $greenhouse->setCode($code);
        $greenhouse->setUnit($unit);
        $greenhouse->setAcreage($acreage);

        $this->timestamp($greenhouse);

        return $greenhouse;
    }

}
