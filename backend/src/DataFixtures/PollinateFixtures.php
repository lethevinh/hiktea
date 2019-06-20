<?php

namespace App\DataFixtures;

use App\DataFixtures\Traits\AccessorTrait;
use App\DataFixtures\Traits\TimestampableTrait;
use App\Entity\Pollinate;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class PollinateFixtures extends Fixture implements OrderedFixtureInterface
{
    use TimestampableTrait;
    use AccessorTrait;

    const LAST_POLLINATE_REFERENCE = 'last-pollinate';

    public function getOrder()
    {
        return 7;
    }

    public function load(ObjectManager $manager)
    {
        $greenhouse = $this->getReference(GreenhouseFixtures::LAST_GREENHOUSE_REFERENCE);
        $assignment = $this->getReference(AssignmentFixtures::LAST_ASSIGNMENT_REFERENCE);

        for ($i = 0; $i < 20; $i++) {
            $pollinate = $this->make(new Pollinate(), [
                "startedAt" => new \DateTime('2011-01-01T00:00:00'),
                "endedAt" => new \DateTime('2011-01-02T00:00:00'),
                "plantsCount" => 0.99,
                "note" => "Yo",
                "isApproved" => false,
                "greenhouse" => $greenhouse,
                "assignment" => $assignment,
            ]);
            $manager->persist($pollinate);
        }

        $manager->flush();
        $this->addReference(self::LAST_POLLINATE_REFERENCE, $pollinate);
    }

    public function make(Pollinate $pollinate, $data)
    {

        $startedAt = $this->getValue($data, '[startedAt]');
        $endedAt = $this->getValue($data, '[endedAt]');
        $plantsCount = $this->getValue($data, '[plantsCount]');
        $note = $this->getValue($data, '[note]');
        $isApproved = $this->getValue($data, '[isApproved]', false);
        $greenhouse = $this->getValue($data, '[greenhouse]');
        $assignment = $this->getValue($data, '[assignment]');

        $pollinate->setStartedAt($startedAt);
        $pollinate->setEndedAt($endedAt);
        $pollinate->setPlantsCount($plantsCount);
        $pollinate->setNote($note);
        $pollinate->setIsApproved($isApproved);
        $pollinate->setGreenhouse($greenhouse);
        $pollinate->setAssignment($assignment);

        $this->timestamp($pollinate);

        return $pollinate;
    }

}
