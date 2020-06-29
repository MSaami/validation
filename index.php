<?php

require_once 'vendor/autoload.php';

$request = [
    'name' => 'Mehrdad Saami',
    'email' => 'Mehrdadsaami@gmail.com'
];


$validator = new App\Validator([
    'email' => [ new App\Rules\Required, new App\Rules\Email]
], $request);



if ($validator->validate()) {
   echo "Success";
}

echo "unsuccess";
