<?php

namespace App\DataFixtures;

use App\DataFixtures\Traits\TimestampableTrait;
use App\Entity\Phase;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\PropertyAccess\PropertyAccess;

class PhaseFixtures extends Fixture implements OrderedFixtureInterface
{

    use TimestampableTrait;

    const LAST_PHASE_REFERENCE = 'last-phase';

    public function getOrder()
    {
        return 5;
    }

    public function load(ObjectManager $manager)
    {
        $orderItem = $this->getReference(OrderItemFixtures::LAST_ORDER_ITEM_REFERENCE);
        for ($i = 0; $i < 5; $i++) {
            $phase = $this->make(new Phase(), [
                "orderItem" => $orderItem,
            ]);
            $manager->persist($phase);
        }

        $manager->flush();
        $this->addReference(self::LAST_PHASE_REFERENCE, $phase);
    }

    public function make(Phase $phase, $data)
    {
        $accessor = PropertyAccess::createPropertyAccessorBuilder()
            ->enableExceptionOnInvalidIndex()
            ->getPropertyAccessor();

        $orderItem = $accessor->getValue($data, '[orderItem]');

        $phase->setOrderItem($orderItem);

        $this->timestamp($phase);

        return $phase;
    }
}
