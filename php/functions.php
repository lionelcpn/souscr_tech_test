<?php

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
