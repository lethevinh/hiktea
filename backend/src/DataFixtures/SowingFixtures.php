<?php

namespace App\DataFixtures;

use App\DataFixtures\Traits\AccessorTrait;
use App\DataFixtures\Traits\TimestampableTrait;
use App\Entity\Sowing;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class SowingFixtures extends Fixture implements OrderedFixtureInterface
{
    use TimestampableTrait;
    use AccessorTrait;

    const LAST_SOWING_REFERENCE = 'last-sowing';

    public function getOrder()
    {
        return 7;
    }

    public function load(ObjectManager $manager)
    {
        $orderItem = $this->getReference(OrderItemFixtures::LAST_ORDER_ITEM_REFERENCE);

        for ($i = 0; $i < 20; $i++) {
            $sowing = $this->make(new Sowing(), [
                "sownAt" => new \DateTime('2011-01-01T00:00:00'),
                "gender" => 'f',
                "plantsCount" => 0.99,
                "note" => "Yo",
                "isApproved" => false,
                "orderItem" => $orderItem,
            ]);
            $manager->persist($sowing);
        }

        $manager->flush();
        $this->addReference(self::LAST_SOWING_REFERENCE, $sowing);
    }

    public function make(Sowing $sowing, $data)
    {

        $gender = $this->getValue($data, '[gender]', 'm');
        $sownAt = $this->getValue($data, '[sownAt]');
        $plantsCount = $this->getValue($data, '[plantsCount]');
        $traysCount = $this->getValue($data, '[traysCount]', null);
        $sownSmallPotAt = $this->getValue($data, '[sownSmallPotAt]', null);
        $sownLargePotAt = $this->getValue($data, '[sownLargePotAt]', null);
        $note = $this->getValue($data, '[note]', null);
        $isApproved = $this->getValue($data, '[isApproved]', false);
        $orderItem = $this->getValue($data, '[orderItem]');

        $sowing->setGender($gender);
        $sowing->setSownAt($sownAt);
        $sowing->setPlantsCount($plantsCount);
        $sowing->setTraysCount($traysCount);
        $sowing->setSownSmallPotAt($sownSmallPotAt);
        $sowing->setSownLargePotAt($sownLargePotAt);
        $sowing->setNote($note);

        $sowing->setIsApproved($isApproved);
        $sowing->setOrderItem($orderItem);

        $this->timestamp($sowing);

        return $sowing;
    }

}
