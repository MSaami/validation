<?php

namespace App\Rules;

interface BaseRule
{
    public function passes($value);
    public function message($field);

}
