<?php

class Person {

    public function __construct(){
        $this->name = null;
        $this->age  = null;
    }

    //Accesstor

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age();
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