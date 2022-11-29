<?php
function password_generate($chars)
{
    if (is_numeric($chars)) {

        $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
        return substr(str_shuffle($data), 0, $chars);
    } else {

        $error = 'Attenzione! Devi inserire un numero';

        return $error;
    }
}
