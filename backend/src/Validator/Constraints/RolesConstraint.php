<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class RolesConstraint extends Constraint
{

    public $message = '"{{ string }}" contains illegal roles.';
}
