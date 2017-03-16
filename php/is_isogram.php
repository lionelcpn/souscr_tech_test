<?php

/**
 * function is_isogram
 * determines if the string given is an isogram (letter must be unique in a word)
 * input : $str String
 */

 function is_isogram($str)
 {
     $clean_str = strtolower($str);

     if ($clean_str == "")
         return true;

     $nb_letters = strlen($clean_str);

     for($i = 0; $i < $nb_letters; $i++) {

         if(mb_substr_count($str, $clean_str[$i]) >= 2)
             return false;
     }
     return true;
 }

$aba_is_isogram = is_isogram("aba");
$Dermatoglyphics_is_isogram = is_isogram("Dermatoglyphics");

echo("\naba : ");
echo ($aba_is_isogram) ? 'True' : 'False';
echo("\nDermatoglyphics : ");
echo(($Dermatoglyphics_is_isogram) ? 'True' : 'False');
