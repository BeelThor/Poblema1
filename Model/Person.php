<?php
class Person{
    protected $name;
    protected $birthdate;

    protected $employee= false;
    public function __construct($name,$birthdate,$employee){
   
            $this->name = $name;
            $this->birthdate = $birthdate;
            $this->employee = $employee;
          
    }
    public function getName(){
        return $this->name;
    }
    public function getBirthdate(){
        return $this->birthdate;
    }
    // public function setEmployee($employee){
    //     $this->employee = $employee == "No" ? false: true;
    //     return $employee;
    // }

    public function getEmployee(){
        return $this->employee;
    }
    
}
