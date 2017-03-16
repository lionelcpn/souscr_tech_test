<?php

/*
 * Make a program that filters a list of strings and returns a list
 * with only your friends name in it. If a name has 4 letters in it,
 * you can be sure that it has to be a friend of yours
 * Ex: Input = ["Ryan", "Kieran", "Jason", "Yous"], Output = ["Ryan", "Yous"]
 */

function only_four_letters_names($array)
{

    // Init an empty array to contains 4 letters names
    $four_letters_names = [];

    // For each name in the given array, check if it contains 4 letters
    foreach($array as $name)
        if(strlen($name) == 4)
            $four_letters_names[] = $name;

    return $four_letters_names;
}

var_dump(only_four_letters_names(["Ryan", "Kieran", "Jason", "Yous", "Jama", "Jirono"]));
