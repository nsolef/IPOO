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


    public function __toString()
    {
        return $this->getNombreTeatro() . ", " . $this->getDireccion() . "\n" .
               "\n" . 
               $this->getFunciones();


    }

    }
