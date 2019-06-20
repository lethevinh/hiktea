<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

class RolesConstraintValidator extends ConstraintValidator
{
    const ROLES = ['ROLE_ADMIN', 'ROLE_USER'];

    public function validate($value, Constraint $constraint)
    {
        if (!is_array($value)) {
            throw new UnexpectedTypeException($value, 'array');
        }

        if (count(array_intersect(self::ROLES, $value)) == 0) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ string }}', implode(", ", $value))
                ->addViolation();
        }
    }
}
