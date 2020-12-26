<?php
class Table{
     public $file;
     public $fileRoute;
     
    public function __construct($nameFile){
      $this->setFile($nameFile);
      $this->getFileRoute();
      $this->conect();
    }
    public function setFile($file){
        $this->file=$file;
        return $this->file;
    }
  public function getFileRoute(){
    $fileRoute = __DIR__."/../$this->file";
     return $fileRoute;
  }
  public function conect(){
    //$fileRoute= "../$this->file";
    $file= fopen($this->getFileRoute(),"r");
    
    return $file;
  }
}
// $table = new Table("Problema1.csv");

// var_dump($table);
