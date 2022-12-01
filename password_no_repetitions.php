<?php

function password_no_repetition($array, $string, $number)
{

    while (strlen($string) < $number) {

        $singleCharacter = array_rand($array);

        if (!str_contains($string, $singleCharacter)) {

            $string .= $singleCharacter;
        }
    };

    return $string;
}
