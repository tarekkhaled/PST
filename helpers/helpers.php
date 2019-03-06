<?php

function formatDate($date)
{
    return date('F j, Y', strtotime($date));
}

function shortenText($text, $chars = 450)
{
    $text = $text . " ";
    $text = substr($text, 0, $chars);
    $text = substr($text, 0, strrpos($text, ' '));
    $text = $text . "...";
    return $text;
}


// create rand array that consists of 20 numbers and contains random numbers ranges from 0 to 40
function createRandArray()
{
    $numbers = array();
    for ($x = 0; $x < 20; $x++) {
        $i = rand(0, 40);
        while (in_array($i, $numbers)) {
            $i = rand(0, 40);
        }
        $numbers[$x] = $i;
    }
    return $numbers;
}
 