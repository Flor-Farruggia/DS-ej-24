<?php
/** Para resolver el ejercicio respetar la arquitectura propuesta en clase, y utilizar Getter y Setters
 * Declarar una clase “Auto” con las siguientes propiedades: marca, modelo, version y "anio". Agregarle un método que imprima sus propiedades 
 * (llamado MostrarDatos). Luego en un archivo llamado index.php instanciar la clase Auto, completar sus propiedades,
 * Marca = "Ford" 
 * Modelo = "Fiesta" 
 * Version = "SE"
 * Anio = "2018" 
 * y llamar al método MostrarDatos.*/

 class Car {
     private $mark;
     public function getMark(){
         return $this->mark;
     }
     public function setMark($mark){
         $this->mark=$mark;
     }

     private $model;
     public function getModel(){
        return $this->model;
    }
    public function setModel($model){
        $this->model=$model;
    }

     private $version;
     public function getVersion(){
        return $this->version;
    }
    public function setversion($version){
        $this->version=$version;
    }

     private $year;
     public function getYear(){
        return $this->year;
    }
    public function setYear($year){
        $this->year=$year;
    }

    public function showData(){
        echo 'The information of the car is: '.'<br>';
        echo 'Mark: '.$this->getMark().'<br>';
        echo 'Model: '.$this->getModel().'<br>';
        echo 'Version: '.$this->getVersion().'<br>';
        echo 'Year: '.$this->getYear().'<br>';
    }
 }