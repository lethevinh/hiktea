<?php

use App\DataFixtures\OrderFixtures;
use App\Entity\Order;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;

class OrderContext implements Context, SnippetAcceptingContext
{
    /**
     * @var EntityManager
     */
    private $manager;

    /**
     * @var OrderFixtures
     */
    private $fixtures;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->manager = $doctrine->getManager();
        $this->fixtures = new OrderFixtures();
    }

    /**
     * @Given There are :arg1 orders
     */
    public function thereAreOrders($arg1)
    {
        $customer = $this->manager->getRepository("App:Customer")->find(1);

        for ($i = 0; $i < $arg1; $i++) {
            $order = $this->fixtures->make(new Order(), [
                "number" => "No-$i",
                "contract" => "Contract-$i",
                "season" => "Spring-$i",
                "customer" => $customer,
            ]);
            $this->manager->persist($order);
        }

        $this->manager->flush();
    }

}
