<?php

namespace App;


class Validator
{

    private $rules;
    private $data;

    public function __construct(array $rules, array $data)
    {
        $this->rules = $rules;
        $this->data = $data;
    }


    public function validate() : boolean
    {


    }
}
