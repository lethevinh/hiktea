<?php

use App\DataFixtures\SowingFixtures;
use App\Entity\Sowing;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;

class SowingContext implements Context, SnippetAcceptingContext
{
    /**
     * @var EntityManager
     */
    private $manager;

    /**
     * @var SowingFixtures
     */
    private $fixtures;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->manager = $doctrine->getManager();
        $this->fixtures = new SowingFixtures();
    }

    /**
     * @Given There are :arg1 sowings
     */
    public function thereAreSowings($arg1)
    {
        $orderItem = $this->manager->getRepository("App:OrderItem")->find(1);

        for ($i = 0; $i < $arg1; $i++) {
            $sowing = $this->fixtures->make(new Sowing(), [
                "plantsCount" => 0.99,
                "sownAt" => new \DateTime('2011-01-01T00:00:00'),
                "gender" => 'f',
                "orderItem" => $orderItem,
            ]);
            $this->manager->persist($sowing);
        }

        $this->manager->flush();
    }

}
