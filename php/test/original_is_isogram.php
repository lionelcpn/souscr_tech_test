<?php

function is_isogram($str)
{
    if ($str == "")
    {
        return true;
    }

    $str = strtolower($str);

    $i = 0;
    while ($i < strlen($str))
    {
        for ($j = $i + 1; $j < strlen($str); $j++)
        {
            if ($str[$i] == $str[$j])
            {
                return false;
            }
        }
        $i++;
    }
    return true;
}

// function is_isogram($str)
// {
//     if ($str == "") {
//         return true;
//     }
//
//     $chars = str_split(strtolower($str));
//     $unique_chars = [];
//
//     foreach ($chars as $key => $char) {
//
//         if(in_array($char, $unique_chars)){
//             return False;
//         }else{
//             $unique_chars[] = $char;
//         }
//     }
//
//     return True;
// }
//
// $aba_is_isogram = is_isogram("aba");
// $Dermatoglyphics_is_isogram = is_isogram("Dermatoglyphics");
//
// echo("\naba : ");
// echo ($aba_is_isogram) ? 'True' : 'False';
// echo("\nDermatoglyphics : ");
// echo(($Dermatoglyphics_is_isogram) ? 'True' : 'False');
