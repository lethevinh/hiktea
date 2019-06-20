<?php

use App\DataFixtures\FarmFixtures;
use App\Entity\Farm;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;

class FarmContext implements Context, SnippetAcceptingContext
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
        $this->fixtures = new FarmFixtures();
    }

    /**
     * @Given There are :arg1 farms
     */
    public function thereAreFarms($arg1)
    {
        $admin = $this->manager->getRepository("App:User")->find(1);

        for ($i = 0; $i < $arg1; $i++) {
            $farm = $this->fixtures->make(new Farm(), [
                "name" => "Farm-$i",
                "user" => $admin,
            ]);
            $this->manager->persist($farm);
        }

        $this->manager->flush();
    }

}
