<?php

require_once  __DIR__ .'/Person.php';
class Employee extends Person 
{
    protected $salary;
    public function __construct($name,$birthdate,$employee,$salary){
       
      parent::__construct($name,$birthdate,$employee);
      $this->salary = $salary;
    }
    public function getSalary(){
        return $this->salary;
    }
}