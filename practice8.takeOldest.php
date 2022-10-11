<?php
namespace App\Users;

//use Funct;
//use Funct\Strings;

use function Funct\Collection\firstN;

$users = [
    ['name' => 'Tirion', 'birthday' => '1988-11-19'],
    ['name' => 'Sam', 'birthday' => '1999-11-22'],
    ['name' => 'Rob', 'birthday' => '1975-01-11'],
    ['name' => 'Sansa', 'birthday' => '2001-03-20'],
    ['name' => 'Tisha', 'birthday' => '1992-02-27']
];

function takeOldest($array, $num = 1) {   
    $help = fn($a, $b) => $a['birthday'] <=> $b['birthday'];
    usort($array, $help);
    $shortArray = [];
    for ($i = 0; $i <$num; $i++) {
        $shortArray[] = $array[$i];
    }
    print_r($shortArray);
}

//takeOldest($users);

echo firstN([1, 2, 3]);

//echo Funct\firstValue(null, null, 'foo_bar'); // => 'foo_bar'
?>
