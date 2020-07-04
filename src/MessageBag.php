<?php

namespace App;

class MessageBag
{
    private $messages = [];


    public function add($key, $message)
    {
        $this->messages[$key][] = $message;
    }

    public function get($key)
    {
        return $this->messages[$key];
    }

    public function errors()
    {
        return $this->messages;
    }

    public function hasError()
    {
        return !empty($this->messages);
    }
}
