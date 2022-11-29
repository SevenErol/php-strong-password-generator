<?php
function password_generate($chars, $repetitions, $letters, $numbers, $specials)
{
    if (is_numeric($chars) && $chars > 3 && $repetitions && $letters && $numbers && $specials) {

        $digits    = array_flip(range('0', '9'));
        $lowercase = array_flip(range('a', 'z'));
        $uppercase = array_flip(range('A', 'Z'));
        $special   = array_flip(str_split('!@#$%^&*()_+=-}{[}]\|;:<>?/'));
        $combined  = array_merge($digits, $lowercase, $uppercase, $special);

        $password  = str_shuffle(array_rand($digits) .
            array_rand($lowercase) .
            array_rand($uppercase) .
            array_rand($special) .
            implode(array_rand($combined, $chars - 4)));

        return $password;
    } else {

        $error = 'Attenzione! Devi completare tutti i campi';

        return $error;
    }
}
