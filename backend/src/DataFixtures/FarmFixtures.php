<?php

namespace App\DataFixtures;

use App\DataFixtures\Traits\TimestampableTrait;
use App\Entity\Farm;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\PropertyAccess\PropertyAccess;

class FarmFixtures extends Fixture implements OrderedFixtureInterface
{
    use TimestampableTrait;

    const LAST_FARM_REFERENCE = 'last-farm';

    public function getOrder()
    {
        return 2;
    }

    public function load(ObjectManager $manager)
    {
        $admin = $this->getReference(UserFixtures::ADMIN_USER_REFERENCE);

        for ($i = 0; $i < 20; $i++) {
            $farm = $this->make(new Farm(), [
                "name" => "Farm-$i",
                "user" => $admin,
            ]);
            $manager->persist($farm);
        }

        $manager->flush();
        $this->addReference(self::LAST_FARM_REFERENCE, $farm);
    }

    public function make(Farm $farm, $data)
    {
        $accessor = PropertyAccess::createPropertyAccessorBuilder()
            ->enableExceptionOnInvalidIndex()
            ->getPropertyAccessor();

        $name = $accessor->getValue($data, '[name]');
        $user = $accessor->getValue($data, '[user]');

        $farm->setName($name);
        $farm->setUser($user);

        $this->timestamp($farm);

        return $farm;
    }

}
