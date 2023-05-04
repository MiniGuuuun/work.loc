<?php

/*$name = "Jonh";

echo $name;



$number = "5" + "5";

echo $number;


$months = ["January", "February", "March", "April", "May"];

echo $months[2];

$person = [
    "name"    => "John",
    "surname" => "Doe",
    "age"     => 27,
    "months"  => ["January", "February", "March", "April", "May"]

];

echo $person['months'][3];
echo $person['name'];
echo $person['surname'];
echo $person['age'];


$country = ["Spain", "United States", "France", "Brasilia"];
$cars = ["Ford Mustang", "BMW", "Chevrolet Camaro", "Dodge Challenger"];
$games = ["CS:GO", "GTA5", "The Witcher 3", "Call Of Duty: War Zone"];


$person = [
    "name"    => "Yaroslav",
    "surname" => "Laskavchenko",
    "age"     => 19,
    "country" => ["Spain", "United States", "France", "Brasilia"],
    "cars"    => ["Ford Mustang", "BMW", "Chevrolet Camaro", "Dodge Challenger"],
    "games"   => ["CS:GO", "GTA5", "The Witcher 3", "Call Of Duty: War Zone"],

    ];

foreach ($person as $person)
{
    echo $person . PHP_EOL;
}



echo $person["name"];
echo $person["surname"];
echo $person["age"];
echo $person["country"][2];
echo $person["cars"][1];
echo $person["games"][1];



$months = ["January", "February", "March", "April", "May"];

foreach ($months as $month){
     echo $month . PHP_EOL;

}


$months = ["January", "February", "March", "April", "May"];

foreach ($months as $month)
{
    if ($month != "February")
    {
        echo $month . PHP_EOL;
    }
}*/

/*function turnON()
{
    echo "Нажал кнопку включения <br>";
    echo "Запуск системы... <br>";
    echo "Система успешно запущена <br>";

}

    turnON();*/


/*function turnON($button, $system)
{
    echo "Нажал $button <br>";
    echo "Запуск системы... <br>";
    echo "Система $system";

}

turnON("кнопку включения", "Система запущена");
*/

/*$a = 2;
$b = 5;
$c = 3;


$d = $b * $b - 4 * $a * $c;

    if ($d > 0) {
        $x1 = -$b + $d / 2 * $a;
        $x2 = -$b - $d / 2 * $a;
        echo "Уравнение имеет два корня: x1 = " . $x1 . ", x2 = " . $x2;
    } elseif ($d == 0) {
        $x = -$b / 2 * $a;
        echo "Уравнение имеет один корень: x = " . $x;
    } else {
        echo "Уравнение не имеет действительных корней";
    }*/




/*function disk($a, $b, $d)
{
    if ($d>0){
        $x1 = -$b+$d/2*$a;
        $x2 = -$b-$d/2*$a;
        echo "Уравнение имеет два корня: x1 = " . $x1 . ", x2 = " . $x2;
    }
    elseif ($d==0){
        $x = -$b/2*$a;
        echo "Уравнение имеет один корень: x = " . $x;
    }
    else {
        echo "Корней нет";
    }
}
     disk(1,1,1);
    disk(2,2,2);
    disk(3,3,3);
    disk(4,4,4);
    disk(5,5,5);*/

/*  function perQuad($a, $b, $c, $d)
    {
        $perQuad = $a + $b + $c + $d;
        echo "Периметр квадрата равен: " . $perQuad;
    }

    perQuad(4, 4, 4, 4);

    function plQuad($a)
    {
        $plQuad = ($a * $a);
        echo "</br> Площадь квадрата равна: " . $plQuad;
    }

    plQuad(4);

    function perCirc($Pi, $r)
    {
        $perCirc = 2 * $Pi * $r;
        echo "</br> Периметр круга равен: " . $perCirc;
    }

    perCirc(3.14, 5);

    function plCirc($Pi, $r)
    {
        $plCirc = $Pi * ($r * $r);
        echo "</br> Площадь круга равна: " . $plCirc;
    }

    plCirc(3.14, 5);

*/


/*function math($a, $Pi, $r){
        $math = $a + $a + $a + $a;
        echo "Периметр квадрата: " . $math;

        $math = $a * $a;
        echo "</br> Площадь квадрата равна: " . $math;

        $math = 2 * $Pi * $r;
        echo "</br> Периметр круга равен: " . $math;

        $math = $Pi * ($r *$r);
        echo "</br> Площадь круга равна: " . $math;
    }
        math(4, 3.14, 5);*/


function car($v, $l, $road){
    $car = ($l / $v) * $road;
    return "Расход: " . $car;
}
    echo car(100, 15, 25);

function math($a, $b, $Pi, $r){
        $math = $a + $a + $a + $a;
        echo "</br> Периметр квадрата: " . $math;

        $math = $a * $a;
        echo "</br> Площадь квадрата равна: " . $math;

        $math = 2 * $Pi * $r;
        echo "</br> Периметр круга равен: " . $math;

        $math = $Pi * ($r * $r);
        echo "</br> Площадь круга равна: " . $math;

        $math = sqrt($a*$a + $b*$b);
        echo "</br> Диагональ прямоугольника равна: " . $math;
    }
        math(4, 2 , 3.14, 5);

function u($r, $i){
    $u = $r * $i;
    echo "</br> Напряжение равно: " .$u;

    $r = $u / $i;
    echo "</br> Сопротивление равно: " .$r;

    $i = $u / $r;
    echo "</br> Сила тока равна: " .$i;
}
    u(15, 16);

?>


