<?php

    class Persona{
       //PROPIEDADES
            public $edad = 0;
            public $pelo = "no mucho";  
            public $nombre = "Juan";

        //METODOS
        public function diHola(){
            echo"te estoy diciendo hola";
        } 
            public function getNombre(){
                echo "Me llamo".$this->nombre."<br>";
            }
            public function setNombre($nuevonombre){

                    $this->nombre = $nuevonombre;
            }
    }
    $juan = new Persona();
    //echo"la edad de juan es ".$juan->edad."<br>";
    //echo"el pelo de juan es ".$juan->pelo."<br>";
    //echo"el nombre de juan es ".$juan->nombre."<br>";

    //$juan->nombre = "juan";

    //echo"el nombre de juan es".$juan->nombre."<br>";
    $juan->diHola(); 
    $juan->getNombre();
    $juan->setNombre("Antonio");
    $juan->getNombre();
?>