<?php

namespace App\DataFixtures;

use App\DataFixtures\Traits\AccessorTrait;
use App\DataFixtures\Traits\TimestampableTrait;
use App\Entity\OrderItem;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class OrderItemFixtures extends Fixture implements OrderedFixtureInterface
{

    use TimestampableTrait;
    use AccessorTrait;

    const LAST_ORDER_ITEM_REFERENCE = 'last-order-item';

    public function getOrder()
    {
        return 4;
    }

    public function load(ObjectManager $manager)
    {
        $crop = $this->getReference(CropFixtures::LAST_CROP_REFERENCE);
        $order = $this->getReference(OrderFixtures::LAST_ORDER_REFERENCE);
        $farm = $this->getReference(FarmFixtures::LAST_FARM_REFERENCE);
        $variety = $this->getReference(VarietyFixtures::LAST_VARIETY_REFERENCE);

        for ($i = 0; $i < 20; $i++) {
            $orderItem = $this->make(new OrderItem(), [
                "order" => $order,
                "farm" => $farm,
                "variety" => $variety,
                "crop" => $crop,
                "quantity" => 20.2,
            ]);
            $manager->persist($orderItem);
        }

        $manager->flush();
        $this->addReference(self::LAST_ORDER_ITEM_REFERENCE, $orderItem);
    }

    public function make(OrderItem $orderItem, $data)
    {
        $order = $this->getValue($data, '[order]');
        $crop = $this->getValue($data, '[crop]');
        $farm = $this->getValue($data, '[farm]');
        $variety = $this->getValue($data, '[variety]');
        $quantity = $this->getValue($data, '[quantity]');
        $stockSeedReceivedAt = $this->getValue($data, '[stockSeedReceivedAt]', null);
        $stockMaleSeedsCount = $this->getValue($data, '[stockMaleSeedsCount]', null);
        $stockFemaleSeedsCount = $this->getValue($data, '[stockFemaleSeedsCount]', null);
        $deliveredAt = $this->getValue($data, '[deliveredAt]', null);

        $orderItem->setOrder($order);
        $orderItem->setCrop($crop);
        $orderItem->setFarm($farm);
        $orderItem->setVariety($variety);
        $orderItem->setQuantity($quantity);
        $orderItem->setStockSeedReceivedAt($stockSeedReceivedAt);
        $orderItem->setStockMaleSeedsCount($stockMaleSeedsCount);
        $orderItem->setStockFemaleSeedsCount($stockFemaleSeedsCount);
        $orderItem->setDeliveredAt($deliveredAt);

        $this->timestamp($orderItem);

        return $orderItem;
    }
}
