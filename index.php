<?php
//declare(strict_types=1);
function mySqr($n, $m)
{
    $res = $n * $n + $m * $m;
    return $res;
}

$value = mySqr(3, 2);
echo $value . "\n"; // буде виведено 9
function f()
{
    echo mySqr(5, 4) . "\n"; // буде виведено 25

    $x = 1;
    $y = 2;
    $z = 3;
    return array($x, $y, $z);
}

print_r(f());

list($a, $b, $c) = f();
echo "$a $b $c";

function increment($a = 5)
{
    echo "Текущее значение: $a\n"; // Поточне значення: 10
    $a++;
    echo "После увеличения: $a\n"; // Після збільшення: 11
}
$num = 10;
echo "Початкове значення: $num \n"; // 10
increment();
echo "Значення не змінилося: $num \n"; // 10;

// function makecup($type = "чаю")
// {
//     return "Зробіть чашку  $type.\n";
// }

// echo makecup();
// echo makecup("какао");
// echo makecup("кави");

function makecup($types = array("какао"), $maker = "без цукру")
{
    return "Зробіть чашку  " . implode(", ", $types) . " $maker.\n";
}
echo makecup();
echo makecup(array("кави", "чаю"));
echo makecup(array("кави", "какао"), "з цукром");
echo makecup(array("кави", "чаю"), "з лимоном");

function planets()
{
    for ($i = 0; $i < func_num_args(); $i++) {
        echo func_get_arg($i) . "\n";
    }
}
planets("Меркурій", "Венера", "Земля", "Марс");

$a = 100; // глобальна змінна
function test()
{
    //global $a;
    // echo "$a"; // ничого не виводить - значення локальної змінної $а не визначено,  глобальна змінна не видима
    echo $GLOBALS["a"];
}
test();

function funct()
{
    static $a;
    $a++;
    echo "$a ";
}
for ($i = 0; $i < 10; $i++) {
    funct();
}
$greet = function ($name) {
    echo ("Привіт, $name");
};
$greet('PHP');

$func = function (int $value): int {
    return $value * 2; // int
};

var_dump($func(22));

// var_dump($func("sdsadsad"));

function show(mixed $n): ?string
{
    if ($n > 0) {
        return "The number {$n}";
    } else {
        return null;
    }
}

var_dump(show(-22));