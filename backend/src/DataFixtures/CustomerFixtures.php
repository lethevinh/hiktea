<?php

namespace App\DataFixtures;

use App\DataFixtures\Traits\TimestampableTrait;
use App\Entity\Customer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\PropertyAccess\PropertyAccess;

class CustomerFixtures extends Fixture implements OrderedFixtureInterface
{

    use TimestampableTrait;

    const LAST_CUSTOMER_REFERENCE = 'last-customer';

    public function getOrder()
    {
        return 2;
    }

    public function load(ObjectManager $manager)
    {

        for ($i = 0; $i < 20; $i++) {
            $customer = $this->make(new Customer(), [
                "email" => "customer$i@example.com",
                "name" => "customer-$i",
            ]);
            $manager->persist($customer);
        }

        $manager->flush();
        $this->addReference(self::LAST_CUSTOMER_REFERENCE, $customer);
    }

    public function make(Customer $customer, $data)
    {
        $accessor = PropertyAccess::createPropertyAccessorBuilder()
            ->enableExceptionOnInvalidIndex()
            ->getPropertyAccessor();

        $email = $accessor->getValue($data, '[email]');
        $name = $accessor->getValue($data, '[name]');

        $customer->setEmail($email);
        $customer->setName($name);

        $this->timestamp($customer);

        return $customer;
    }
}
