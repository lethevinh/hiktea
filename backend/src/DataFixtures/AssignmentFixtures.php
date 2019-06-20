<?php

namespace App\DataFixtures;

use App\DataFixtures\Traits\AccessorTrait;
use App\DataFixtures\Traits\TimestampableTrait;
use App\Entity\Assignment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class AssignmentFixtures extends Fixture implements OrderedFixtureInterface
{
    use TimestampableTrait;
    use AccessorTrait;

    const LAST_ASSIGNMENT_REFERENCE = 'last-assignment';

    public function getOrder()
    {
        return 6;
    }

    public function load(ObjectManager $manager)
    {
        $sheet = $this->getReference(SheetFixtures::LAST_SHEET_REFERENCE);
        $unit = $this->getReference(UnitFixtures::LAST_UNIT_REFERENCE);
        $phase = $this->getReference(PhaseFixtures::LAST_PHASE_REFERENCE);

        for ($i = 0; $i < 5; $i++) {
            $assignment = $this->make(new Assignment(), [
                "sheet" => $sheet,
                "unit" => $unit,
                "phase" => $phase,
            ]);
            $manager->persist($assignment);
        }

        $manager->flush();
        $this->addReference(self::LAST_ASSIGNMENT_REFERENCE, $assignment);
    }

    public function make(Assignment $assignment, $data)
    {

        $remarks = $this->getValue($data, '[remarks]', null);
        $diseaseGrade = $this->getValue($data, '[diseaseGrade]', null);
        $riskGrade = $this->getValue($data, '[riskGrade]', null);
        $sheet = $this->getValue($data, '[sheet]');
        $unit = $this->getValue($data, '[unit]');
        $phase = $this->getValue($data, '[phase]');

        $assignment->setRemarks($remarks);
        $assignment->setDiseaseGrade($diseaseGrade);
        $assignment->setRiskGrade($riskGrade);
        $assignment->setSheet($sheet);
        $assignment->setUnit($unit);
        $assignment->setPhase($phase);

        $this->timestamp($assignment);

        return $assignment;
    }

}
