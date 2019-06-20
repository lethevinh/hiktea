<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'session' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/SessionInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/Session.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/SessionBagInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/Attribute/AttributeBagInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/Attribute/AttributeBag.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/Flash/FlashBagInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/Flash/FlashBag.php';

return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(($this->privates['session.storage.mock_file'] ?? $this->load('getSession_Storage_MockFileService.php')), ($this->privates['session.attribute_bag'] ?? $this->privates['session.attribute_bag'] = new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag()), ($this->privates['session.flash_bag'] ?? $this->privates['session.flash_bag'] = new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag()));
