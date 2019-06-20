<?php

namespace App\DataFixtures;

use App\DataFixtures\Traits\AccessorTrait;
use App\DataFixtures\Traits\TimestampableTrait;
use App\Entity\Sheet;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class SheetFixtures extends Fixture implements OrderedFixtureInterface
{
    use TimestampableTrait;
    use AccessorTrait;

    const LAST_SHEET_REFERENCE = 'last-sheet';

    public function getOrder()
    {
        return 5;
    }

    public function load(ObjectManager $manager)
    {
        $greenhouse = $this->getReference(GreenhouseFixtures::LAST_GREENHOUSE_REFERENCE);

        for ($i = 0; $i < 20; $i++) {
            $sheet = $this->make(new Sheet(), [
                "sownAt" => new \DateTime('2011-01-01T00:00:00'),
                "plantedAt" => new \DateTime('2011-01-02T00:00:00'),
            ]);
            $manager->persist($sheet);
        }

        $manager->flush();
        $this->addReference(self::LAST_SHEET_REFERENCE, $sheet);
    }

    public function make(Sheet $sheet, $data)
    {

        $sownAt = $this->getValue($data, '[sownAt]', null);
        $plantedAt = $this->getValue($data, '[plantedAt]', null);
        $stockSeedReceivedAt = $this->getValue($data, '[stockSeedReceivedAt]', null);
        $stockMaleSeedsCount = $this->getValue($data, '[stockMaleSeedsCount]', null);
        $stockFemaleSeedsCount = $this->getValue($data, '[stockFemaleSeedsCount]', null);
        $plantsCount = $this->getValue($data, '[plantsCount]', 0);
        $note = $this->getValue($data, '[note]', null);
        $smallTransplantedAt = $this->getValue($data, '[smallTransplantedAt]', null);
        $bigTransplantedAt = $this->getValue($data, '[bigTransplantedAt]', null);
        $pollinateStartedAt = $this->getValue($data, '[pollinateStartedAt]', null);
        $pollinateEndedAt = $this->getValue($data, '[pollinateEndedAt]', null);
        $harvestStartedAt = $this->getValue($data, '[harvestStartedAt]', null);
        $harvestEndedAt = $this->getValue($data, '[harvestEndedAt]', null);

        $sheet->setSownAt($sownAt);
        $sheet->setPlantedAt($plantedAt);
        $sheet->setStockSeedReceivedAt($stockSeedReceivedAt);
        $sheet->setStockMaleSeedsCount($stockMaleSeedsCount);
        $sheet->setStockFemaleSeedsCount($stockFemaleSeedsCount);
        $sheet->setPlantsCount($plantsCount);
        $sheet->setNote($note);

        $sheet->setSmallTransplantedAt($smallTransplantedAt);
        $sheet->setBigTransplantedAt($bigTransplantedAt);
        $sheet->setPollinateStartedAt($pollinateStartedAt);
        $sheet->setPollinateEndedAt($pollinateEndedAt);
        $sheet->setHarvestStartedAt($harvestStartedAt);
        $sheet->setHarvestEndedAt($harvestEndedAt);

        $this->timestamp($sheet);

        return $sheet;
    }

}
