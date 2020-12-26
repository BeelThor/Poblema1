<?php

require_once __DIR__ .'/Person.php';
class Student extends Person{
    protected $calification;
    public function __construct($name,$birthdate,$employee,$calification){
       
      parent::__construct($name,$birthdate,$employee);
      $this->calification= $calification;
    }
    public function getCalification(){
        return $this->calification;
    }
}