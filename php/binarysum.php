<?php

/**
* Write a function that takes an (unsigned) integer as input, and returns the
* number of bits that are equal to one in the binary representation of
* that number. Example: The binary representation of 1234 is 10011010010,
* so the function should return 5 in this case
*/

function binarysum($unsigned_int)
{
    if (is_int($unsigned_int))
        /*Je convertis en binaire avec decbin,
        je convertis la chaîne de caractères en tableau avec str_split
        puis je calcule la somme des valeurs du tableau avec array_sum*/
        return array_sum(str_split(decbin($unsigned_int)))."\n";
}
