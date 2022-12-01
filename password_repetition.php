<?php



function password_repetition($array, $string, $number)
{

    while (strlen($string) < $number) {

        $singleCharacter = array_rand($array);

        $string .= $singleCharacter;
    };

    return $string;
}
