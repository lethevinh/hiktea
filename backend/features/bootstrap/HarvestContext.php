<?php

use App\DataFixtures\HarvestFixtures;
use App\Entity\Harvest;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;

class HarvestContext implements Context, SnippetAcceptingContext
{
    /**
     * @var EntityManager
     */
    private $manager;

    /**
     * @var FarmFixtures
     */
    private $fixtures;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->manager = $doctrine->getManager();
        $this->fixtures = new HarvestFixtures();
    }

    /**
     * @Given There are :arg1 Harvests
     */
    public function thereAreHarvests($arg1)
    {
        $greenhouse = $this->manager->getRepository("App:Greenhouse")->find(1);
        $assignment = $this->manager->getRepository("App:Assignment")->find(1);

        for ($i = 0; $i < $arg1; $i++) {
            $harvest = $this->fixtures->make(new Harvest(), [
                "startedAt" => new \DateTime('2011-01-01T00:00:00'),
                "endedAt" => new \DateTime('2011-01-02T00:00:00'),
                "fruitsCount" => 0.99,
                "seedsCount" => 0.99,
                "isApproved" => false,
                "greenhouse" => $greenhouse,
                "assignment" => $assignment,
            ]);
            $this->manager->persist($harvest);
        }

        $this->manager->flush();
    }

}
