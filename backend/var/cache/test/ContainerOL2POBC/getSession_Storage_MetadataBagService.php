<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'session.storage.metadata_bag' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/SessionBagInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/Storage/MetadataBag.php';

return $this->privates['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
