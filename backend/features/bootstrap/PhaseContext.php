<?php

use App\DataFixtures\PhaseFixtures;
use App\Entity\Phase;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;

class PhaseContext implements Context, SnippetAcceptingContext
{
    /**
     * @var EntityManager
     */
    private $manager;

    /**
     * @var PhaseFixtures
     */
    private $fixtures;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->manager = $doctrine->getManager();
        $this->fixtures = new PhaseFixtures();
    }

    /**
     * @Given There are :arg1 phases
     */
    public function thereArePhases($arg1)
    {
        $orderItem = $this->manager->getRepository("App:OrderItem")->find(1);

        for ($i = 0; $i < $arg1; $i++) {
            $phase = $this->fixtures->make(new Phase(), [
                "orderItem" => $orderItem,
            ]);
            $this->manager->persist($phase);
        }

        $this->manager->flush();
    }

}
