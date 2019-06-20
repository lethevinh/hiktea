<?php

namespace App\DataFixtures;

use App\DataFixtures\Traits\TimestampableTrait;
use App\Entity\Order;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\PropertyAccess\PropertyAccess;

class OrderFixtures extends Fixture implements OrderedFixtureInterface
{

    use TimestampableTrait;

    const LAST_ORDER_REFERENCE = 'last-order';

    public function getOrder()
    {
        return 2;
    }

    public function load(ObjectManager $manager)
    {
        $customer = $this->getReference(CustomerFixtures::LAST_CUSTOMER_REFERENCE);
        for ($i = 0; $i < 20; $i++) {
            $order = $this->make(new Order(), [
                "number" => "order$i-NO",
                "contract" => "order-$i",
                "season" => "Spring-$i",
                "customer" => $customer,
            ]);
            $manager->persist($order);
        }

        $manager->flush();
        $this->addReference(self::LAST_ORDER_REFERENCE, $order);
    }

    public function make(Order $order, $data)
    {
        $accessor = PropertyAccess::createPropertyAccessorBuilder()
            ->enableExceptionOnInvalidIndex()
            ->getPropertyAccessor();

        $number = $accessor->getValue($data, '[number]');
        $contract = $accessor->getValue($data, '[contract]');
        $season = $accessor->getValue($data, '[season]');
        $customer = $accessor->getValue($data, '[customer]');

        $order->setNumber($number);
        $order->setContract($contract);
        $order->setSeason($season);
        $order->setCustomer($customer);

        $this->timestamp($order);

        return $order;
    }
}
