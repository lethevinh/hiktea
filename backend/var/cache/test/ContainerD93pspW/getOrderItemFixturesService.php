<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\DataFixtures\OrderItemFixtures' shared autowired service.

include_once $this->targetDirs[3].'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/FixtureInterface.php';
include_once $this->targetDirs[3].'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/SharedFixtureInterface.php';
include_once $this->targetDirs[3].'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/AbstractFixture.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-fixtures-bundle/ORMFixtureInterface.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-fixtures-bundle/Fixture.php';
include_once $this->targetDirs[3].'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/OrderedFixtureInterface.php';
include_once $this->targetDirs[3].'/src/DataFixtures/Traits/TimestampableTrait.php';
include_once $this->targetDirs[3].'/src/DataFixtures/Traits/AccessorTrait.php';
include_once $this->targetDirs[3].'/src/DataFixtures/OrderItemFixtures.php';

return $this->privates['App\\DataFixtures\\OrderItemFixtures'] = new \App\DataFixtures\OrderItemFixtures();
