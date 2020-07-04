<?php

namespace App;

class Validator
{

    private $rules;
    private $data;
    private $messages;

    public function __construct(array $rules, array $data)
    {
        $this->rules = $rules;
        $this->data = $data;
        $this->messages = new MessageBag();
    }


    public function validate()
    {
        foreach ($this->rules as $key => $rules){
            foreach($rules as $rule) {
                if(!$this->isValid($rule, $this->getValueOfField($key))){
                    $this->messages->add($key, $rule->message($key));
                }
            }
        }
        return !$this->messages->hasError();
    }

    public function errors()
    {
        return $this->messages->errors();
    }


    protected function isValid($rule, $value)
    {
        return $rule->passes($value);
    }

    protected function getValueOfField($field)
    {
        return $this->data[$field] ?? null;
    }

}
