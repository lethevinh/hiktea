<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'annotated_app_entity_assignment_api_platform_core_bridge_doctrine_orm_filter_order_filter' shared autowired service.

include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/FilterInterface.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/FilterInterface.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Common/PropertyHelperTrait.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/PropertyHelperTrait.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/AbstractFilter.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/ContextAwareFilterInterface.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/AbstractContextAwareFilter.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Common/Filter/OrderFilterInterface.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Common/Filter/OrderFilterTrait.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/OrderFilter.php';

return $this->privates['annotated_app_entity_assignment_api_platform_core_bridge_doctrine_orm_filter_order_filter'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter(($this->services['doctrine'] ?? $this->getDoctrineService()), NULL, 'order', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ['id' => NULL]);
