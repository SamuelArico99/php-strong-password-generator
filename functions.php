<?php

function generaPassword($length)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&?';

    $password = '';

    for ($i = 0; $i < $length; $i++) {

        $randomNumber = rand(0, strlen($characters) - 1);
        $password .= $characters[$randomNumber];
    }

    return $password;
}
