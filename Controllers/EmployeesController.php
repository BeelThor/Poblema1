<?php
require_once  __DIR__  . '/TableController.php';
class EmployeesController extends TableController{
    public $menores_25;
   public $mayores;
   public $entre_25_34;
   public $salario_menores;
   public $salario_medios;
   public $salario_mayores;
    public function __construct($student,$employee){
        parent::__construct($student,$employee);
        
        $this->getConexion('Employees.csv');
       $this->setArrayEmployees();
       $this->getDataEmployees();
        $this->getPromedySalary();
    }
    
    public function getTotalEmployees(){
        $total= count($this->dbEmployees);
        return $total-1;
    }

  
    public function getDataEmployees(){
        $menores_25 = 0;
        $entre_25_34=0;
        $mayores=0;
        $salario_menores=0;
        $salario_medios=0;
        $salario_mayores=0;

        foreach($this->dbEmployees as $key => $values){
            if($values['employee'] == "Sí"){
                $age = $values['age'];
                $salary=$values['salary'];
                if($age<25){
                    $menores_25++;
                    $salario_menores += $salary;
    
                }else if ( $age >= 25  && $age <=34 ){
                    $entre_25_34++;
                    $salario_medios += $salary;
    
                }else {
                    $mayores++;
                    $salario_mayores += $salary;
                }
            }
            }
      
        $this->menores_25=$menores_25;
        $this->entre_25_34= $entre_25_34;
        $this->mayores = $mayores;
        $this->salario_menores = $salario_menores;
         $this->salario_medios = $salario_medios;
         $this->salario_mayores = $salario_mayores;
    }
    public function getPromedySalary(){
        $this->salario_menores = $this->salario_menores/$this->menores_25;
        $this->salario_medios = $this->salario_medios/$this->entre_25_34;
        $this->salario_mayores = $this->salario_mayores/$this->mayores;
    }
    
}
