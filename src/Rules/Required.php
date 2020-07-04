<?php

namespace App\Rules;

class Required implements BaseRule
{
    public function passes($value)
    {
        return !empty($value);
    }

    public function message($field)
    {
        return $field . ' must be exists';

    }

}
