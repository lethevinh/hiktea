<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.translation_debug' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php';

$this->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($this->services['translator'] ?? $this->getTranslatorService()), ($this->privates['translation.reader'] ?? $this->load('getTranslation_ReaderService.php')), ($this->privates['translation.extractor'] ?? $this->load('getTranslation_ExtractorService.php')), ($this->targetDirs[3].'/translations'), ($this->targetDirs[3].'/templates'), [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations'), 1 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations')], [0 => ($this->targetDirs[3].'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 1 => ($this->targetDirs[3].'/vendor/symfony/validator/Util/LegacyTranslatorProxy.php'), 2 => ($this->targetDirs[3].'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 3 => ($this->targetDirs[3].'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php'), 4 => ($this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php')]);

$instance->setName('debug:translation');

return $instance;
