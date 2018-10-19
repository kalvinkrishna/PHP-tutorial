<?php

use App\Vehicle;

class Car extends Vehicle{

    public function __construct(){
        $this->brand = null;
        $this->ban = 3;
        $this->bensin = 1000;
        $this->cc = 400;
        $this->seats = 10;
    }

    public function info(){
        return (array) $this;
    }

    public function setBrand($namaBrand){
        $this->brand = $namaBrand;
    }
}

?>