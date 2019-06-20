<?php

use App\DataFixtures\OrderItemFixtures;
use App\Entity\OrderItem;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;

class OrderItemContext implements Context, SnippetAcceptingContext
{
    /**
     * @var EntityManager
     */
    private $manager;

    /**
     * @var OrderItemFixtures
     */
    private $fixtures;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->manager = $doctrine->getManager();
        $this->fixtures = new OrderItemFixtures();
    }

    /**
     * @Given There are :arg1 order items
     */
    public function thereAreOrderItems($arg1)
    {
        $order = $this->manager->getRepository("App:Order")->find(1);
        $crop = $this->manager->getRepository("App:Crop")->find(1);
        $variety = $this->manager->getRepository("App:Variety")->find(1);
        $farm = $this->manager->getRepository("App:Farm")->find(1);

        for ($i = 0; $i < $arg1; $i++) {
            $orderItem = $this->fixtures->make(new OrderItem(), [
                "order" => $order,
                "crop" => $crop,
                "variety" => $variety,
                "farm" => $farm,
                "quantity" => 30.5,
            ]);
            $this->manager->persist($orderItem);
        }

        $this->manager->flush();
    }

}
