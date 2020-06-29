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


    public function validate()
    {
        foreach ($this->rules as $key => $rules){
            foreach($rules as $rule) {
                 return $rule->passes($this->data[$key]);
            }
        }
    }
}
