<?php

use App\DataFixtures\SheetFixtures;
use App\Entity\Sheet;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;

class SheetContext implements Context, SnippetAcceptingContext
{
    /**
     * @var EntityManager
     */
    private $manager;

    /**
     * @var SheetFixtures
     */
    private $fixtures;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->manager = $doctrine->getManager();
        $this->fixtures = new SheetFixtures();
    }

    /**
     * @Given There are :arg1 sheets
     */
    public function thereAreSheets($arg1)
    {
        for ($i = 0; $i < $arg1; $i++) {
            $unit = $this->fixtures->make(new Sheet(), [
                "note" => "Sheet-note-$i",
            ]);
            $this->manager->persist($unit);
        }

        $this->manager->flush();
    }

}
