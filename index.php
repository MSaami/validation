<?php

require_once 'vendor/autoload.php';

$request = [
    'name' => '',
    'email' => 'mehrdadsaami@gmail.com'
];


$validator = new App\Validator([
    'name' => [ new App\Rules\Required],
    'email' => [ new App\Rules\Required, new App\Rules\Email]
], $request);



if ($validator->validate()) {
   echo "Success";
   return;
}

dump($validator->errors());

