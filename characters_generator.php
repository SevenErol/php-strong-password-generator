<?php
function characters_generator()
{

    $characters = [
        "digits" => array_flip(range('0', '9')),
        "lowercase" => array_flip(range('a', 'z')),
        "uppercase" => array_flip(range('A', 'Z')),
        "special" => array_flip(str_split('!@#$%^&*()_+=-}{[}]\|;:<>?/'))
    ];

    return $characters;
};
