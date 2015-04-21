<?php

namespace SLLH\IsoCodesValidator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * Class Nif
 */
class Nif extends Constraint
{
    public $message = 'This value is not a valid NIF.';
}
