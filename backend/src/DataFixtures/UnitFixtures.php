<?php

namespace App\DataFixtures;

use App\DataFixtures\Traits\TimestampableTrait;
use App\Entity\Unit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\PropertyAccess\PropertyAccess;

class UnitFixtures extends Fixture implements OrderedFixtureInterface
{
    use TimestampableTrait;

    const LAST_UNIT_REFERENCE = 'last-unit';

    public function getOrder()
    {
        return 3;
    }

    public function load(ObjectManager $manager)
    {
        $admin = $this->getReference(UserFixtures::ADMIN_USER_REFERENCE);
        $farm = $this->getReference(FarmFixtures::LAST_FARM_REFERENCE);

        for ($i = 0; $i < 5; $i++) {
            $unit = $this->make(new Unit(), [
                "name" => "Unit-$i",
                "user" => $admin,
                "farm" => $farm,
            ]);
            $manager->persist($unit);
        }

        $manager->flush();
        $this->addReference(self::LAST_UNIT_REFERENCE, $unit);
    }

    public function make(Unit $unit, $data)
    {
        $accessor = PropertyAccess::createPropertyAccessorBuilder()
            ->enableExceptionOnInvalidIndex()
            ->getPropertyAccessor();

        $name = $accessor->getValue($data, '[name]');
        $user = $accessor->getValue($data, '[user]');
        $farm = $accessor->getValue($data, '[farm]');

        $unit->setName($name);
        $unit->setUser($user);
        $unit->setFarm($farm);

        $this->timestamp($unit);

        return $unit;
    }

}
