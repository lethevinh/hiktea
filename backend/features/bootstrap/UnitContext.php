<?php

use App\DataFixtures\UnitFixtures;
use App\Entity\Unit;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;

class UnitContext implements Context, SnippetAcceptingContext
{
    /**
     * @var EntityManager
     */
    private $manager;

    /**
     * @var UnitFixtures
     */
    private $fixtures;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->manager = $doctrine->getManager();
        $this->fixtures = new UnitFixtures();
    }

    /**
     * @Given There are :arg1 units
     */
    public function thereAreUnits($arg1)
    {
        $admin = $this->manager->getRepository("App:User")->find(1);
        $farm = $this->manager->getRepository("App:Farm")->find(1);

        for ($i = 0; $i < $arg1; $i++) {
            $unit = $this->fixtures->make(new Unit(), [
                "name" => "Unit-$i",
                "user" => $admin,
                "farm" => $farm,
            ]);
            $this->manager->persist($unit);
        }

        $this->manager->flush();
    }

}
