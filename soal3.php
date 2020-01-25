<?php

function drawLine($text)
{
    $whiteSpace = "";
    $array = str_split($text);

    foreach ($array as $value) {
        echo $whiteSpace . "" . $value . "\n";
        $whiteSpace .= " ";
    }
}

drawLine("andiganteng");