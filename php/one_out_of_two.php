<?php

/**
 * function one_out_of_two($str)
 * retuns the string given one out of two letter in uppercase
 * input : $str String
 */
 
function one_out_of_two($str)
{
    $concat = "";
    for ($i = 0; $i < strlen($str); $i++)
    {
        if ($i % 2 == 0)
        {
            $concat = $concat . strtoupper($str[$i]);
        }
        else
        {
            $concat = $concat . $str[$i];
        }
    }
    return $concat;
}

print "Hello world ==> " . one_out_of_two("hello world");
