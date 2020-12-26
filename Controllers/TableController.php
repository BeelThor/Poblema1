<?php
require_once  __DIR__  . '/../Model/Table.php';
require_once  __DIR__  . '/../Model/Employee.php';
require_once  __DIR__  . '/../Model/Student.php';
class TableController{
    public $dbStudents=[
        0 => [
            'name',
            'birthdate',
            'employee',
            'salary',
            'calification',
            'age'
         
        ]
    ];
    public $dbEmployees=[
        0 => [
            'name',
            'birthdate',
            'employee',
            'salary',
            'age'
           
        ]
    ];
    public $table;
    public $studentCondition;
    public $employeeCondition;

    public function __construct($student,$employee){
    $this->setConditions($student,$employee);
    }

    public function setConditions($student,$employee){
        $this->studentCondition = $student;
        $this->employeeCondition = $employee;
    }

    public function getConexion($file){
        $this->table = new Table($file);
        $this->table=$this->table->conect();
    }

    public function setArrayEmployees(){
        $employeeCondition = $this->employeeCondition;
        $table = $this->table;
        if($table!==NULL){
      
            while (($data=fgetcsv($table,    ","  ) )!==FALSE){
             for($i = 0; $i<=0 ; $i++) {
      
                if($data[2] == $employeeCondition){
                    
                        $birthdate = $data[1];
                        $now= date('y-m-d');
                        $edad_diff = date_diff(date_create($birthdate), date_create($now));
                        $age= $edad_diff -> format('%y');

                                   $employee = new Employee($data[0],$data[1],$data[2],$data[3]);
                                
                                     array_push($this->dbEmployees,[
                                        'name' => $employee->getName(),
                                        'birthdate' => $employee->getBirthdate(),
                                        'employee'=>$employee->getEmployee(),
                                        'salary' =>(int)$employee->getSalary(),
                                        'age' => $age
                                    ]);

                                }
             }

         }
         
        }else{
            echo 'nulo';
        }
        
    
}
public function setArrayStudents(){
    $studentCondition = $this->studentCondition;

    $table = $this->table;
    if($table!==NULL){
  
        while (($data=fgetcsv($table,    ","  ) )!==FALSE){
         for($i = 0; $i<=0 ; $i++) {
           
           if($data[2] == $studentCondition){

            $birthdate= $data[1];
            $now= date('Y-m-d');
            $edad_diff = date_diff(date_create($birthdate), date_create($now));
            $age= $edad_diff -> format('%y');

                                $student = new Student($data[0],$data[1],$data[2],$data[4]);
                                array_push($this->dbStudents,[
                                    'name' => $student->getName(),
                                    'birthdate' => $student->getBirthdate(),
                                    'employee' => $student->getEmployee(),
                                    'salary' => "--",
                                    'calification' => $student->getCalification(),
                                    'age' => $age
                               
                                ]);
                              
                            }
         }
  
     }
     
    }else{
        echo 'nulo';
    }
    

}
public function setEmployees(){
    $this->getConexion("Problema1.csv");
    $this->setArrayEmployees();
    $fichero = fopen(__DIR__.'/../Employees.csv','w');
    //var_dump($this->dbEmployees);
    foreach($this->dbEmployees as $key => $values){
        fputcsv($fichero,$values);
    }

}
public function setStudents(){
    $this->getConexion("Problema1.csv");
    $this->setArrayStudents();
    $fichero = fopen(__DIR__.'/../Students.csv','w');
    //var_dump($this->dbStudents);
    foreach($this->dbStudents as  $key => $values){
        fputcsv($fichero,$values);
    }
}
}

