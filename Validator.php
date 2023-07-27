<?php

class Validator{

    public static function string($val, $min = 1, $max = INF){

        $value = trim($val);

        return strlen($value) >= $min && strlen($value) < $max;

    } 

    public static function email($value){

        return filter_var($value, FILTER_VALIDATE_EMAIL);

    }


}