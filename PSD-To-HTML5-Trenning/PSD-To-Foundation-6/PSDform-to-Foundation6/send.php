
<?php

$post = [
    'name' => 'name',
    'day' => 'day',
    'codes' => 'codes',
    'phone' => 'phone',
    'gender'   => 1,
    'day' => 'day',
    'month' => 'month',
    'year' => 'year'
];

$ch = curl_init('http://example.com');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

$response = curl_exec($ch);

curl_close($ch);

var_dump($response);