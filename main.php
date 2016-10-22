<?php
include 'array.php';

$arr_example = new Array_Example(1, 100);

print_r('Initialize array: ');
print_r($arr_example->getter());
print_r('<br/>');
print_r('<br/>');

print_r('Before removing: ');
print_r(count($arr_example->getter()));
print_r('<br/>');
print_r('After removing: ');
$arr_example->remove_element(100);
print_r(count($arr_example->getter()));
print_r('<br/>');
print_r('<br/>');

print_r('Biggest element: ');
$max_element = $arr_example->get_max_element();
print_r($max_element);
print_r('<br/>');
print_r('<br/>');

print_r('Numerous element: ');
$numerous_element = $arr_example->get_numerous();
print_r($numerous_element);
print_r('<br/>');
print_r('<br/>');

print_r('Shuffle array: ');
$arr_example->shuffle();
print_r($arr_example->getter());
?>