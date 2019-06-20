<?php

namespace App\DataFixtures;

use App\DataFixtures\Traits\AccessorTrait;
use App\DataFixtures\Traits\TimestampableTrait;
use App\Entity\Transplant;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class TransplantFixtures extends Fixture implements OrderedFixtureInterface
{
    use TimestampableTrait;
    use AccessorTrait;

    const LAST_TRANSPLANT_REFERENCE = 'last-transplant';

    public function getOrder()
    {
        return 7;
    }

    public function load(ObjectManager $manager)
    {
        $greenhouse = $this->getReference(GreenhouseFixtures::LAST_GREENHOUSE_REFERENCE);
        $assignment = $this->getReference(AssignmentFixtures::LAST_ASSIGNMENT_REFERENCE);

        for ($i = 0; $i < 20; $i++) {
            $transplant = $this->make(new Transplant(), [
                "transplantedAt" => new \DateTime('2011-01-01T00:00:00'),
                "endedAt" => new \DateTime('2011-01-02T00:00:00'),
                "plantsCount" => 0.99,
                "note" => "Yo",
                "isApproved" => false,
                "greenhouse" => $greenhouse,
                "assignment" => $assignment,
            ]);
            $manager->persist($transplant);
        }

        $manager->flush();
        $this->addReference(self::LAST_TRANSPLANT_REFERENCE, $transplant);
    }

    public function make(Transplant $transplant, $data)
    {

        $gender = $this->getValue($data, '[gender]', 'm');
        $transplantedAt = $this->getValue($data, '[transplantedAt]');
        $plantsCount = $this->getValue($data, '[plantsCount]');
        $expectedTransplantAt = $this->getValue($data, '[expectedTransplantAt]', null);
        $expectedProcessOldSoilAt = $this->getValue($data, '[expectedProcessOldSoilAt]', null);
        $expectedPrepareNewSoilAt = $this->getValue($data, '[expectedPrepareNewSoilAt]', null);
        $isApproved = $this->getValue($data, '[isApproved]', false);
        $greenhouse = $this->getValue($data, '[greenhouse]');
        $assignment = $this->getValue($data, '[assignment]');

        $transplant->setGender($gender);
        $transplant->setTransplantedAt($transplantedAt);
        $transplant->setPlantsCount($plantsCount);
        $transplant->setExpectedTransplantAt($expectedTransplantAt);
        $transplant->setExpectedProcessOldSoilAt($expectedProcessOldSoilAt);
        $transplant->setExpectedPrepareNewSoilAt($expectedPrepareNewSoilAt);

        $transplant->setIsApproved($isApproved);
        $transplant->setGreenhouse($greenhouse);
        $transplant->setAssignment($assignment);

        $this->timestamp($transplant);

        return $transplant;
    }

}
