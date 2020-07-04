<?php

namespace App\Rules;

class Email implements BaseRule
{
    public function passes($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public function message($field)
    {
        return $field . ' must be an email';
    }
}
