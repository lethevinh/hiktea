<?php

use App\DataFixtures\GreenhouseFixtures;
use App\Entity\Greenhouse;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;

class GreenhouseContext implements Context, SnippetAcceptingContext
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
        $this->fixtures = new GreenhouseFixtures();
    }

    /**
     * @Given There are :arg1 greenhouses
     */
    public function thereAreGreenhouses($arg1)
    {
        $unit = $this->manager->getRepository("App:Unit")->find(1);

        for ($i = 0; $i < $arg1; $i++) {
            $greenhouse = $this->fixtures->make(new Greenhouse(), [
                "code" => "Greenhouse-$i",
                "unit" => $unit,
                "acreage" => 0.22,
            ]);
            $this->manager->persist($greenhouse);
        }

        $this->manager->flush();
    }

}
