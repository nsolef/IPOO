<?php

class Teatro {

    private $nombreTeatro;
    private $dirección;
    private $funciones;

    public function __construct($nombreTeatro, $direccion, $funciones) 
    {
        $this->nombreTeatro = $nombreTeatro;
        $this->direccion = $direccion;
        $this->funciones = $funciones;
    } 

    // Setters

    public function setNombreTeatro($nombreTeatro) 
    {
        $this->nombreTeatro = $nombreTeatro;
    }

    public function setDireccion($direccion) 
    {
        $this->direccion = $direccion;
    }

    public function setFunciones($funciones) 
    {
        $this->funciones = $funciones;
    }


    // Getters

    public function getNombreTeatro() 
    {
        return $this->nombreTeatro;
    }

    public function getDireccion() 
    {
        return $this->direccion;
    }

    public function getFunciones() 
    {
        return $this->funciones;
    }


    // Métodos


    public function cambiarNombreTeatro($nuevoNombre) 
    {
        $this->setNombreTeatro($nuevoNombre);
    }

    public function cambiarDireccion($nuevaDir) 
    {
        $this->setDireccion($nuevaDir);
    }

    public function verNombreFunciones() 
    {
       return "1: " . $this->getFunciones()[0]['nombre'] . "\n" .
              "2: " . $this->getFunciones()[1]['nombre'] . "\n" .
              "3: " . $this->getFunciones()[2]['nombre'] . "\n" .
              "4: " .$this->getFunciones()[3]['nombre'] . "\n";
    }

    public function verPrecioFunciones() 
    {
        return "1: $" . $this->getFunciones()[0]['precio'] . "\n" .
               "2: $" . $this->getFunciones()[1]['precio'] . "\n" .
               "3: $" . $this->getFunciones()[2]['precio'] . "\n" .
               "4: $" .$this->getFunciones()[3]['precio'] . "\n";
    }

    public function cambiarNombreFunciones($numFuncion, $nuevaFuncion) 
    {
        $funcionNombre = $this->getFunciones();
        $funcionNombre[$numFuncion - 1]['nombre'] = $nuevaFuncion;
        $this->setFunciones($funcionNombre);
    }

    public function cambiarPrecioFunciones($numFuncion, $nuevoPrecio) 
    {
        $funcionPrecio = $this->getFunciones();
        $funcionPrecio[$numFuncion - 1]['precio'] = $nuevoPrecio;
        $this->setFunciones($funcionPrecio);
    }


    public function __toString() 
    {
        return $this->getNombreTeatro() . ", " . $this->getDireccion() . "\n" . 
               "Función 1: " . $this->getFunciones()[0]['nombre'] . ", " . "$" . $this->getFunciones()[0]['precio'] . "\n" .
               "Función 2: " . $this->getFunciones()[1]['nombre'] . ", " . "$" . $this->getFunciones()[1]['precio'] . "\n" . 
               "Función 3: " . $this->getFunciones()[2]['nombre'] . ", " . "$" . $this->getFunciones()[2]['precio'] . "\n" . 
               "Función 4: " . $this->getFunciones()[3]['nombre'] . ", " . "$" . $this->getFunciones()[3]['precio'] . "\n";
    } 
        
    }





