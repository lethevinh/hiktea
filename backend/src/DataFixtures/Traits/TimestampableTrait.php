<?php

namespace App\DataFixtures\Traits;

trait TimestampableTrait
{

    public function timestamp($entity)
    {
        $entity->setCreatedAt(new \DateTime('2011-01-01T00:00:00'));
        $entity->setUpdatedAt(new \DateTime('2011-01-01T00:00:00'));
        return $this;
    }

}
