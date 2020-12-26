<?php
require_once  __DIR__  . '/TableController.php';
class StudentsController extends TableController{

    public $menores_25;
    public $mayores;
    public $entre_25_34;
    public $calificacion_menores;
    public $calificacion_medios;
    public $calificacion_mayores;
     public function __construct($student,$employee){
         parent::__construct($student,$employee);
         
         $this->getConexion('Students.csv');
        $this->setArrayStudents();
        $this->getDataStudents();
        $this->getPromedyCalification();
     }
     
     public function getTotalStudents(){
         $total= count($this->dbStudents);
         return $total-1;
     }
     
   
     public function getDataStudents(){
         $menores_25 = 0;
         $entre_25_34=0;
         $mayores=0;
         $califiacion_menores=0;
         $califiacion_medios=0;
         $califiacion_mayores=0;
 
         foreach($this->dbStudents as $key => $values){
             if($values['employee'] == "No"){
                 $age = $values['age'];
                 $calification=$values['calification'];
                 if($age<25){
                     $menores_25++;
                     $calificacion_menores += $calification;
     
                 }else if ( $age >= 25  && $age <=34 ){
                     $entre_25_34++;
                     $calificacion_medios += $calification;
     
                 }else {
                     $mayores++;
                     $calificacion_mayores += $calification;
                 }
             }
             }
       
         $this->menores_25=$menores_25;
         $this->entre_25_34= $entre_25_34;
         $this->mayores = $mayores;
         $this->calificacion_menores = $calificacion_menores;
         $this->calificacion_medios = $calificacion_medios;
         $this->calificacion_mayores = $calificacion_mayores;
     }
     public function getPromedyCalification(){
         $this->calificacion_menores = $this->calificacion_menores/$this->menores_25;
         $this->calificacion_medios = $this->calificacion_medios/$this->entre_25_34;
         $this->calificacion_mayores = $this->calificacion_mayores/$this->mayores;
     }
     
}
