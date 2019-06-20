<?php

namespace App\DataFixtures\Traits;

use Symfony\Component\PropertyAccess\PropertyAccess;

trait AccessorTrait
{
    private $accessor;

    public function getAccessor()
    {
        if (!$this->accessor) {
            $this->accessor = PropertyAccess::createPropertyAccessorBuilder()
                ->enableExceptionOnInvalidIndex()
                ->getPropertyAccessor();
        }
        return $this->accessor;
    }

    public function getValue($data, $path, $default = null)
    {
        $accessor = $this->getAccessor();
        if (!$accessor->isReadable($data, $path)) {
            return $default;
        }
        return $accessor->getValue($data, $path);
    }

}
