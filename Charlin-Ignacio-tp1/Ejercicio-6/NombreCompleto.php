<?php

    /*
       Cree una clase llamada NombreCompleto, la misma tendra un constructor que reciba nombre,
       apellido y sexo por parámetro.
       Dicha clase debe implementar el método saludoFormal() el cual debe responder “Estimado Sr
       /Estimada Sra” según corresponda, nombre y apellido. Ej: “Estimado Sr. Facundo D’Aranno”
       Dicha clase debe implementar también el método saludoInformal() el cual debe responder “Hola
       Nombre”. Ej: “Hola Facundo”
    */
class NombreCompleto{
    protected $nombre;
    protected $apellido;
    protected $sexo;

    public function __construct($nombre , $apellido,$sexo){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sexo = $sexo;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getSexo(){
        return $this->sexo;
    }

   public function saludoFormal(){
        $saludo='';
        if($this->getSexo() == 'M') {
            $saludo = 'Estimado Sr. '.$this->getNombre().' '.$this->getApellido();
        }elseif ($this->getSexo() == 'F'){
            $saludo = 'Estimada Sra. '.$this->getNombre().' '.$this->getApellido();
        }else{
            $saludo = 'Sexo Incorrecto';
        }
        return $saludo;
   }

   public function saludoInformal(){
        return 'Hola '.$this->getNombre();
   }

}

?>