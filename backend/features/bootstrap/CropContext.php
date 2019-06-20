<?php

use App\DataFixtures\CropFixtures;
use App\Entity\Crop;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;

class CropContext implements Context, SnippetAcceptingContext
{
    /**
     * @var EntityManager
     */
    private $manager;

    /**
     * @var CropFixtures
     */
    private $fixtures;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->manager = $doctrine->getManager();
        $this->fixtures = new CropFixtures();
    }

    /**
     * @Given There are :arg1 crops
     */
    public function thereAreCrops($arg1)
    {
        for ($i = 0; $i < $arg1; $i++) {
            $crop = $this->fixtures->make(new Crop(), [
                "name" => "Crop-$i",
            ]);
            $this->manager->persist($crop);
        }

        $this->manager->flush();
    }

}
