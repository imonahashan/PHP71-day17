<?php
require_once 'Example.php';


class DemoTwo extends Example
{
    public  $age = 22;
    protected $location = "Farmgate";
    private $mobile = '01671565275';


    public function newOne(){
//        echo 'In new one';
        $this->addition();
    }

    protected function newTwo(){
        echo 'In new two';
    }

    private function newThree(){
        echo 'In new three';
    }

}

