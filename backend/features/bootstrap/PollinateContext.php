<?php

use App\DataFixtures\PollinateFixtures;
use App\Entity\Pollinate;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;

class PollinateContext implements Context, SnippetAcceptingContext
{
    /**
     * @var EntityManager
     */
    private $manager;

    /**
     * @var PollinateFixtures
     */
    private $fixtures;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->manager = $doctrine->getManager();
        $this->fixtures = new PollinateFixtures();
    }

    /**
     * @Given There are :arg1 Pollinates
     */
    public function thereArePollinates($arg1)
    {
        $greenhouse = $this->manager->getRepository("App:Greenhouse")->find(1);
        $assignment = $this->manager->getRepository("App:Assignment")->find(1);

        for ($i = 0; $i < $arg1; $i++) {
            $pollinate = $this->fixtures->make(new Pollinate(), [
                "startedAt" => new \DateTime('2011-01-01T00:00:00'),
                "endedAt" => new \DateTime('2011-01-02T00:00:00'),
                "plantsCount" => 0.99,
                "note" => "Hey",
                "isApproved" => false,
                "greenhouse" => $greenhouse,
                "assignment" => $assignment,
            ]);
            $this->manager->persist($pollinate);
        }

        $this->manager->flush();
    }

}
