<?php
 
function minmax($data)
{
    $data2 = $data;
    foreach ($data2 as &$value) {

        $value = ord(strtolower($value)) - 96;
    }
    unset($value);
 
 
    $arr = array();
 
 
    $index_min = array_search(min($data2), $data2);
 
    $arr_max = array();
 
    for ($i = $index_min; $i < count($data2); $i++) {
 
        array_push($arr_max, $data2[$i]);
    }
 
    $index_max = array_search(max($arr_max), $data2);
 
    array_push($arr, $data[$index_min], $data[$index_max]);
 
 
    return $arr;
}
{
 $testing_a = array('a','b','c');

$testing_b = array('b','d','c'); 
minmax($testing_a);
 minmax($testing_b);


var_dump(minmax($testing_a));
var_dump(minmax($testing_b));
}