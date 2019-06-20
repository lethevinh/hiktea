<?php

use App\DataFixtures\ProgressionFixtures;
use App\Entity\Progression;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;

class ProgressionContext implements Context, SnippetAcceptingContext
{
    /**
     * @var EntityManager
     */
    private $manager;

    /**
     * @var ProgressionFixtures
     */
    private $fixtures;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->manager = $doctrine->getManager();
        $this->fixtures = new ProgressionFixtures();
    }

    /**
     * @Given There are :arg1 progressions
     */
    public function thereAreProgressions($arg1)
    {
        $sheet = $this->manager->getRepository("App:Sheet")->find(1);

        for ($i = 0; $i < $arg1; $i++) {
            $progression = $this->fixtures->make(new Progression(), [
                "sheet" => $sheet,
                "month" => $i + 1,
            ]);
            $this->manager->persist($progression);
        }

        $this->manager->flush();
    }

}
