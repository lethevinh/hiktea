<?php

use App\DataFixtures\VarietyFixtures;
use App\Entity\Variety;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;

class VarietyContext implements Context, SnippetAcceptingContext
{
    /**
     * @var EntityManager
     */
    private $manager;

    /**
     * @var VarietyFixtures
     */
    private $fixtures;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->manager = $doctrine->getManager();
        $this->fixtures = new VarietyFixtures();
    }

    /**
     * @Given There are :arg1 varieties
     */
    public function thereAreVarietys($arg1)
    {
        $customer = $this->manager->getRepository("App:Customer")->find(1);

        for ($i = 0; $i < $arg1; $i++) {
            $variety = $this->fixtures->make(new Variety(), [
                "name" => "Variety-$i",
                "code" => "Variety-code-$i",
                "customer" => $customer,
            ]);
            $this->manager->persist($variety);
        }

        $this->manager->flush();
    }

}
