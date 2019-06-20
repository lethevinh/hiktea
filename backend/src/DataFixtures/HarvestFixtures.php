<?php

namespace App\DataFixtures;

use App\DataFixtures\Traits\AccessorTrait;
use App\DataFixtures\Traits\TimestampableTrait;
use App\Entity\Harvest;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class HarvestFixtures extends Fixture implements OrderedFixtureInterface
{
    use TimestampableTrait;
    use AccessorTrait;

    const LAST_HARVEST_REFERENCE = 'last-harvest';

    public function getOrder()
    {
        return 7;
    }

    public function load(ObjectManager $manager)
    {
        $greenhouse = $this->getReference(GreenhouseFixtures::LAST_GREENHOUSE_REFERENCE);
        $assignment = $this->getReference(AssignmentFixtures::LAST_ASSIGNMENT_REFERENCE);

        for ($i = 0; $i < 20; $i++) {
            $harvest = $this->make(new Harvest(), [
                "startedAt" => new \DateTime('2011-01-01T00:00:00'),
                "endedAt" => new \DateTime('2011-01-02T00:00:00'),
                "fruitsCount" => 0.99,
                "seedsCount" => 0.99,
                "isApproved" => false,
                "greenhouse" => $greenhouse,
                "assignment" => $assignment,
            ]);
            $manager->persist($harvest);
        }

        $manager->flush();
        $this->addReference(self::LAST_HARVEST_REFERENCE, $harvest);
    }

    public function make(Harvest $harvest, $data)
    {

        $startedAt = $this->getValue($data, '[startedAt]');
        $endedAt = $this->getValue($data, '[endedAt]');
        $fruitsCount = $this->getValue($data, '[fruitsCount]');
        $seedsCount = $this->getValue($data, '[seedsCount]');
        $isApproved = $this->getValue($data, '[isApproved]', false);
        $greenhouse = $this->getValue($data, '[greenhouse]');
        $assignment = $this->getValue($data, '[assignment]');

        $harvest->setStartedAt($startedAt);
        $harvest->setEndedAt($endedAt);
        $harvest->setFruitsCount($fruitsCount);
        $harvest->setSeedsCount($seedsCount);
        $harvest->setIsApproved($isApproved);
        $harvest->setGreenhouse($greenhouse);
        $harvest->setAssignment($assignment);

        $this->timestamp($harvest);

        return $harvest;
    }

}
