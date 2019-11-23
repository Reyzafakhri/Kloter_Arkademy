<?php

$name = 'Reyza Fakhri Azzadi';
$age  = 22;

getProfile($name, $age);
function getProfile($name, $age)
{
    $list_scholl = [
        'nameschool' => 'UNIVERSITAS GUNADARMA',
        'Inyear'  => '2015',
        'Outyear' => '2019'
    ];
    $skills = [
        'skill_name' => 'Networking',
        'level'      => 'Advanced',
    ];
    $request = [
        'name'               => $name,
        'age'                => $age,
        'Address'            => 'PUP BLOK F 14 NO 24 BEKASI UTARA',
        'Hobbies'            => ['Badminton', 'Berenang'],
        'is_married'         => false,
        'list_scholl'        => [$list_scholl],
        'skill'              => $skills,
        'interest_in_coding' => true,
    ];
    $params = [
        'profile' => [$request],
    ];
    echo json_encode($params, JSON_PRETTY_PRINT);
}
