<?php

class Person {

    protected $jml_mobil = 0;
    protected $cars = [];


    public function __construct($name = null){
        $this->name      = $name;
        $this->age       = 0;
        $this->jml_mobil = 0;
    }

    //Accesstor

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age();
    }

    public function getMobil($idcar = 0){
        return $cars[$idcar];
    }

    public function buyCar(Car $car){
        array_push($cars,$car);
    }

    public function getListMobil(){
        return $cars;
    }

    //Mutator

    public function setName($name = null){
        $this->name = $name;
    }

    public function setAge($age = null){
        $this->age = $age;
    }
}

?>