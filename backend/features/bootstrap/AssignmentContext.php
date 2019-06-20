<?php

use App\DataFixtures\AssignmentFixtures;
use App\Entity\Assignment;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;

class AssignmentContext implements Context, SnippetAcceptingContext
{
    /**
     * @var EntityManager
     */
    private $manager;

    /**
     * @var AssignmentFixtures
     */
    private $fixtures;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->manager = $doctrine->getManager();
        $this->fixtures = new AssignmentFixtures();
    }

    /**
     * @Given There are :arg1 assignments
     */
    public function thereAreAssignments($arg1)
    {
        $unit = $this->manager->getRepository("App:Unit")->find(1);
        $sheet = $this->manager->getRepository("App:Sheet")->find(1);
        $phase = $this->manager->getRepository("App:Phase")->find(1);

        for ($i = 0; $i < $arg1; $i++) {
            $assignment = $this->fixtures->make(new Assignment(), [
                "unit" => $unit,
                "sheet" => $sheet,
                "phase" => $phase,
            ]);
            $this->manager->persist($assignment);
        }

        $this->manager->flush();
    }

}
