<?php

namespace App\DataFixtures;

use App\DataFixtures\Traits\TimestampableTrait;
use App\Entity\Variety;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\PropertyAccess\PropertyAccess;

class VarietyFixtures extends Fixture implements OrderedFixtureInterface
{
    use TimestampableTrait;

    const LAST_VARIETY_REFERENCE = 'last-variety';

    public function getOrder()
    {
        return 3;
    }

    public function load(ObjectManager $manager)
    {
        $customer = $this->getReference(CustomerFixtures::LAST_CUSTOMER_REFERENCE);

        for ($i = 0; $i < 5; $i++) {
            $variety = $this->make(new Variety(), [
                "name" => "Variety-$i",
                "code" => "Code-Variety-$i",
                "customer" => $customer,
            ]);
            $manager->persist($variety);
        }

        $manager->flush();
        $this->addReference(self::LAST_VARIETY_REFERENCE, $variety);
    }

    public function make(Variety $variety, $data)
    {
        $accessor = PropertyAccess::createPropertyAccessorBuilder()
            ->enableExceptionOnInvalidIndex()
            ->getPropertyAccessor();

        $name = $accessor->getValue($data, '[name]');
        $code = $accessor->getValue($data, '[code]');
        $customer = $accessor->getValue($data, '[customer]');

        $variety->setName($name);
        $variety->setCode($code);
        $variety->setCustomer($customer);

        $this->timestamp($variety);

        return $variety;
    }

}
