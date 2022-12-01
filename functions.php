<?php
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

        while (strlen($password) < $chars) {

            $singleCharacter = array_rand($combined);

            if (!str_contains($password, $singleCharacter)) {

                $password .= $singleCharacter;
            }
        };

        return $password;
    } elseif (is_numeric($chars) && $chars > 3 && $repetitions === 'true' && $letters === '1' && $numbers === '0' && $specials === '0') {

        $password = '';

        $characters = characters_generator();

        $combined = combination($characters['lowercase'], $characters['uppercase']);

        while (strlen($password) < $chars) {

            $singleCharacter = array_rand($combined);

            $password .= $singleCharacter;
        };

        return $password;
    } elseif (is_numeric($chars) && $chars > 3 && $chars < 53 && $repetitions === 'false' && $letters === '1' && $numbers === '0' && $specials === '0') {

        $password = '';

        $characters = characters_generator();

        $combined = combination($characters['lowercase'], $characters['uppercase']);

        while (strlen($password) < $chars) {

            $singleCharacter = array_rand($combined);

            if (!str_contains($password, $singleCharacter)) {

                $password .= $singleCharacter;
            }
        };

        return $password;
    } elseif (is_numeric($chars) && $chars > 3 && $repetitions === 'true' && $letters === '0' && $numbers === '1' && $specials === '0') {

        $password = '';

        $characters = characters_generator();

        $combined = $characters['digits'];

        while (strlen($password) < $chars) {

            $singleCharacter = array_rand($combined);

            $password .= $singleCharacter;
        };

        return $password;
    } elseif (is_numeric($chars) && $chars > 3 && $chars <= 10 && $repetitions === 'false' && $letters === '0' && $numbers === '1' && $specials === '0') {

        $password = '';

        $characters = characters_generator();

        $combined = $characters['digits'];

        while (strlen($password) < $chars) {

            $singleCharacter = array_rand($combined);

            if (!str_contains($password, $singleCharacter)) {

                $password .= $singleCharacter;
            }
        };

        return $password;
    } elseif (is_numeric($chars) && $chars > 3 && $repetitions === 'true' && $letters === '0' && $numbers === '0' && $specials === '1') {

        $password = '';

        $characters = characters_generator();

        $combined = $characters['special'];

        while (strlen($password) < $chars) {

            $singleCharacter = array_rand($combined);

            $password .= $singleCharacter;
        };

        return $password;
    } elseif (is_numeric($chars) && $chars > 3 && $chars <= 28 && $repetitions === 'false' && $letters === '0' && $numbers === '0' && $specials === '1') {

        $password = '';

        $characters = characters_generator();

        $combined = $characters['special'];

        while (strlen($password) < $chars) {

            $singleCharacter = array_rand($combined);

            if (!str_contains($password, $singleCharacter)) {

                $password .= $singleCharacter;
            }
        };

        return $password;
    } elseif (is_numeric($chars) && $chars > 3 && $repetitions === 'true' && $letters === '1' && $numbers === '1' && $specials === '0') {

        $password = '';

        $characters = characters_generator();

        $combined = combination($characters['lowercase'], $characters['uppercase'], $characters['digits']);

        while (strlen($password) < $chars) {

            $singleCharacter = array_rand($combined);

            $password .= $singleCharacter;
        };

        return $password;
    } elseif (is_numeric($chars) && $chars > 3 && $repetitions === 'false' && $letters === '1' && $numbers === '1' && $specials === '0') {

        $password = '';

        $characters = characters_generator();

        $combined = combination($characters['lowercase'], $characters['uppercase'], $characters['digits']);

        while (strlen($password) < $chars) {

            $singleCharacter = array_rand($combined);

            if (!str_contains($password, $singleCharacter)) {

                $password .= $singleCharacter;
            }
        };

        return $password;
    } elseif (is_numeric($chars) && $chars > 3 && $repetitions === 'true' && $letters === '1' && $numbers === '0' && $specials === '1') {

        $password = '';

        $characters = characters_generator();

        $combined = combination($characters['lowercase'], $characters['uppercase'], $characters['special']);

        while (strlen($password) < $chars) {

            $singleCharacter = array_rand($combined);

            $password .= $singleCharacter;
        };

        return $password;
    } elseif (is_numeric($chars) && $chars > 3 && $repetitions === 'false' && $letters === '1' && $numbers === '0' && $specials === '1') {

        $password = '';

        $characters = characters_generator();

        $combined = combination($characters['lowercase'], $characters['uppercase'], $characters['special']);

        while (strlen($password) < $chars) {

            $singleCharacter = array_rand($combined);

            if (!str_contains($password, $singleCharacter)) {

                $password .= $singleCharacter;
            }
        };

        return $password;
    } elseif (is_numeric($chars) && $chars > 3 && $repetitions === 'true' && $letters === '0' && $numbers === '1' && $specials === '1') {

        $password = '';

        $characters = characters_generator();

        $combined = combination($characters['digits'], $characters['special']);

        while (strlen($password) < $chars) {

            $singleCharacter = array_rand($combined);

            $password .= $singleCharacter;
        };

        return $password;
    } elseif (is_numeric($chars) && $chars > 3 && $repetitions === 'false' && $letters === '0' && $numbers === '1' && $specials === '1') {

        $password = '';

        $characters = characters_generator();

        $combined = combination($characters['digits'], $characters['special']);

        while (strlen($password) < $chars) {

            $singleCharacter = array_rand($combined);

            if (!str_contains($password, $singleCharacter)) {

                $password .= $singleCharacter;
            }
        };

        return $password;
    } else {

        $error = 'Attenzione! Devi completare tutti i campi';

        return $error;
    }
};

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

function combination(...$params)
{

    $combined = array_merge(...$params);

    return $combined;
}
