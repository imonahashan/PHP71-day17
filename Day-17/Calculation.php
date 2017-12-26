<?php

/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 26-Dec-17
 * Time: 10:33 AM
 */
class Calculation
{

    function myCalculator($data){
        echo '<pre>';
        print_r($data);
        $btn = $data['btn'];
        switch ($btn){
            case '+' :
                $result = $data['first_number']+ $data['last_number'];
                break;

            case '-' :
                $result = $data['first_number']- $data['last_number'];
                break;

            case '*' :
                $result = $data['first_number']* $data['last_number'];
                break;

            case '/' :
                $result = $data['first_number']/ $data['last_number'];
                break;
        }
        return $result;
    }

}