<?php


$request = [
    'name' => 'Mehrdad Saami',
    'email' => 'Mehrdadsaami@gmail.com'
];


$validator = new App\Validator([
    'email' => ['required', 'email']
], $request);



if ($validator->validate()) {
   return echo "Success";
}

echo "unsuccess";
