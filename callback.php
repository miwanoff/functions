<?php

$f = function () {
    echo "Hello!";
};

$f();

function my_f()
{
    echo "World";
}

function my_f1()
{
    echo "World callback!!!";
}

$c = "my_f1";

$c();

function call_back_f($c)
{
    $c();
}

call_back_f("my_f1");

// Порівняння без урахування регістру символів рядків
function my_cmp($a, $b)
{
    $a = strtoupper($a); //перевід до верхнього регістру $a
    $b = strtoupper($b); //перевід до верхнього регістру $b
    if ($a > $b) {
        return 1;
    }

    if ($a == $b) {
        return 0;
    } else {
        return -1;
    }

}
$arr = array("M", "a", "R", "y");
uasort($arr, "my_cmp"); // Сортування без урахування   регістру символів.

print_r($arr);

echo "\n";

function my_case($a)
{
    return strtoupper($a);
}
$arr = array("M", "a", "r", "y");
$new_arr = array_map("my_case", $arr);
print_r($new_arr);

call_user_func("my_f");