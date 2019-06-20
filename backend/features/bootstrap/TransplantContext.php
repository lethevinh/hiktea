<?php

use App\DataFixtures\TransplantFixtures;
use App\Entity\Transplant;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;

class TransplantContext implements Context, SnippetAcceptingContext
{
    /**
     * @var EntityManager
     */
    private $manager;

    /**
     * @var TransplantFixtures
     */
    private $fixtures;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->manager = $doctrine->getManager();
        $this->fixtures = new TransplantFixtures();
    }

    /**
     * @Given There are :arg1 transplants
     */
    public function thereAreTransplants($arg1)
    {
        $greenhouse = $this->manager->getRepository("App:Greenhouse")->find(1);
        $assignment = $this->manager->getRepository("App:Assignment")->find(1);

        for ($i = 0; $i < $arg1; $i++) {
            $transplant = $this->fixtures->make(new Transplant(), [
                "plantsCount" => 0.99,
                "greenhouse" => $greenhouse,
                "assignment" => $assignment,
            ]);
            $this->manager->persist($transplant);
        }

        $this->manager->flush();
    }

}
