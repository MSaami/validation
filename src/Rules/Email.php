<?php

namespace App\Rules;

class Email implements BaseRule
{
    public function passes($value)
    {
        return true;
    }

    public function message($field)
    {
        $field . 'is required';
    }
}
