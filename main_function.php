<?php

require __DIR__ . "./characters_generator.php";

require __DIR__ . "./combined_array_generator.php";

require __DIR__ . "./password_repetition.php";

require __DIR__ . "./password_no_repetitions.php";

function password_check($chars, $repetitions, $letters, $numbers, $specials)
{
    if (is_numeric($chars) && $chars > 3 && $repetitions === 'true' && $letters && $numbers && $specials) {

        $characters = characters_generator();

        $combined = combination($characters['digits'], $characters['lowercase'], $characters['uppercase'], $characters['special']);

        $password  = str_shuffle(array_rand($characters['digits']) .
            array_rand($characters['lowercase']) .
            array_rand($characters['uppercase']) .
            array_rand($characters['special']) .
            implode(array_rand($combined, $chars - 4)));

        return $password;
    } elseif (is_numeric($chars) && $repetitions === 'false' && $letters && $numbers && $specials) {

        $password = '';

        $characters = characters_generator();

        $combined = combination($characters['digits'], $characters['lowercase'], $characters['uppercase'], $characters['special']);

        return password_no_repetition($combined, $password, $chars);
    } elseif (is_numeric($chars) && $chars > 3 && $repetitions === 'true' && $letters === '1' && $numbers === '0' && $specials === '0') {

        $password = '';

        $characters = characters_generator();

        $combined = combination($characters['lowercase'], $characters['uppercase']);

        return password_repetition($combined, $password, $chars);
    } elseif (is_numeric($chars) && $chars > 3 && $chars < 53 && $repetitions === 'false' && $letters === '1' && $numbers === '0' && $specials === '0') {

        $password = '';

        $characters = characters_generator();

        $combined = combination($characters['lowercase'], $characters['uppercase']);

        return password_no_repetition($combined, $password, $chars);
    } elseif (is_numeric($chars) && $chars > 3 && $repetitions === 'true' && $letters === '0' && $numbers === '1' && $specials === '0') {

        $password = '';

        $characters = characters_generator();

        $combined = $characters['digits'];

        return password_repetition($combined, $password, $chars);
    } elseif (is_numeric($chars) && $chars > 3 && $chars <= 10 && $repetitions === 'false' && $letters === '0' && $numbers === '1' && $specials === '0') {

        $password = '';

        $characters = characters_generator();

        $combined = $characters['digits'];

        return password_no_repetition($combined, $password, $chars);
    } elseif (is_numeric($chars) && $chars > 3 && $repetitions === 'true' && $letters === '0' && $numbers === '0' && $specials === '1') {

        $password = '';

        $characters = characters_generator();

        $combined = $characters['special'];

        return password_repetition($combined, $password, $chars);
    } elseif (is_numeric($chars) && $chars > 3 && $chars <= 28 && $repetitions === 'false' && $letters === '0' && $numbers === '0' && $specials === '1') {

        $password = '';

        $characters = characters_generator();

        $combined = $characters['special'];

        return password_no_repetition($combined, $password, $chars);
    } elseif (is_numeric($chars) && $chars > 3 && $repetitions === 'true' && $letters === '1' && $numbers === '1' && $specials === '0') {

        $password = '';

        $characters = characters_generator();

        $combined = combination($characters['lowercase'], $characters['uppercase'], $characters['digits']);

        return password_repetition($combined, $password, $chars);
    } elseif (is_numeric($chars) && $chars > 3 && $repetitions === 'false' && $letters === '1' && $numbers === '1' && $specials === '0') {

        $password = '';

        $characters = characters_generator();

        $combined = combination($characters['lowercase'], $characters['uppercase'], $characters['digits']);

        return password_no_repetition($combined, $password, $chars);
    } elseif (is_numeric($chars) && $chars > 3 && $repetitions === 'true' && $letters === '1' && $numbers === '0' && $specials === '1') {

        $password = '';

        $characters = characters_generator();

        $combined = combination($characters['lowercase'], $characters['uppercase'], $characters['special']);

        return password_repetition($combined, $password, $chars);
    } elseif (is_numeric($chars) && $chars > 3 && $repetitions === 'false' && $letters === '1' && $numbers === '0' && $specials === '1') {

        $password = '';

        $characters = characters_generator();

        $combined = combination($characters['lowercase'], $characters['uppercase'], $characters['special']);

        return password_no_repetition($combined, $password, $chars);
    } elseif (is_numeric($chars) && $chars > 3 && $repetitions === 'true' && $letters === '0' && $numbers === '1' && $specials === '1') {

        $password = '';

        $characters = characters_generator();

        $combined = combination($characters['digits'], $characters['special']);

        return password_repetition($combined, $password, $chars);
    } elseif (is_numeric($chars) && $chars > 3 && $repetitions === 'false' && $letters === '0' && $numbers === '1' && $specials === '1') {

        $password = '';

        $characters = characters_generator();

        $combined = combination($characters['digits'], $characters['special']);

        return password_no_repetition($combined, $password, $chars);
    } else {

        $error = 'Attenzione! Devi completare tutti i campi';

        return $error;
    }
};
