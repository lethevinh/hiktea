<?php

namespace App\DataFixtures;

use App\DataFixtures\Traits\AccessorTrait;
use App\DataFixtures\Traits\TimestampableTrait;
use App\Entity\Progression;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ProgressionFixtures extends Fixture implements OrderedFixtureInterface
{
    use TimestampableTrait;
    use AccessorTrait;

    const LAST_PROGRESSION_REFERENCE = 'last-progression';

    public function getOrder()
    {
        return 6;
    }

    public function load(ObjectManager $manager)
    {
        $sheet = $this->getReference(SheetFixtures::LAST_SHEET_REFERENCE);

        for ($i = 0; $i < 12; $i++) {
            $progression = $this->make(new Progression(), [
                "month" => $i + 1,
                "sheet" => $sheet,
            ]);
            $manager->persist($progression);
        }

        $manager->flush();
        $this->addReference(self::LAST_PROGRESSION_REFERENCE, $progression);
    }

    public function make(Progression $progression, $data)
    {

        $month = $this->getValue($data, '[month]');
        $sheet = $this->getValue($data, '[sheet]');
        $fruitsCount = $this->getValue($data, '[fruitsCount]', null);
        $seedsCount = $this->getValue($data, '[seedsCount]', null);
        $plantsCount = $this->getValue($data, '[plantsCount]', null);
        $unusablePlantsCount = $this->getValue($data, '[unusablePlantsCount]', null);
        $seedsWeight = $this->getValue($data, '[seedsWeight]', null);
        $riskGrade = $this->getValue($data, '[riskGrade]', null);
        $diseaseGrade = $this->getValue($data, '[diseaseGrade]', null);
        $remarks = $this->getValue($data, '[remarks]', null);

        $progression->setMonth($month);
        $progression->setSheet($sheet);
        $progression->setFruitsCount($fruitsCount);
        $progression->setSeedsCount($seedsCount);
        $progression->setPlantsCount($plantsCount);
        $progression->setUnusablePlantsCount($unusablePlantsCount);
        $progression->setSeedsWeight($seedsWeight);
        $progression->setRiskGrade($riskGrade);
        $progression->setDiseaseGrade($diseaseGrade);
        $progression->setRemarks($remarks);

        $this->timestamp($progression);

        return $progression;
    }

}
