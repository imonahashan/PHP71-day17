<?php

class Example
{
    public $name = 'Ahashan Imon';
    protected $city = 'Dhaka';
    private $country = 'Bangladesh';
    public $value;

//    function __construct($data)
//    {
//        echo $data;
//    }


    public function addition(){
        echo 'In addition';
//        $this->value = $data;
    }

    protected function subtraction(){
        echo 'In subtraction';

    }

    private function division(){
        echo 'In division';
    }


}