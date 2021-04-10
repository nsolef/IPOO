<?php

class Funciones
{
    // Atributos

    private $nombre;
    private $horario;
    private $duracion;
    private $precio;

    // Construct

    public function __construct($nombre, $horario, $duracion, $precio)
    {
        $this->nombre = $nombre;
        $this->horario = $horario;
        $this->duracion = $duracion;
        $this->precio = $precio;
    }

    // Setters

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setHorario($horario)
    {
        $this->horario = $horario;
    }

    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    // Getters

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getHorario()
    {
        return $this->horario;
    }

    public function getDuracion()
    {
        return $this->duracion;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    // Métodos

    public function verNombreFunciones($cantFunciones)
    {
        $nomFunciones = "";
        for ($i=0; $i < $cantFunciones; $i++)
        {
            $nomFunciones .= $i + 1 . ": " . $this->getNombre()[$i] . "\n";

        }
       return $nomFunciones;
    }


    public function verPrecioFunciones($cantFunciones)
    {
        $listaPrecio = "";
        for ($i=0; $i < $cantFunciones; $i++)
        {
            $listaPrecio .= $i + 1 . ": $" . $this->getPrecio()[$i] . "\n";
        }
        return $listaPrecio;
    }

    public function cambiarNombreFunciones($numFuncion, $nuevaFuncion)
    {
        $funcionNombre = $this->getNombre();
        $funcionNombre[$numFuncion - 1] = $nuevaFuncion;
        $this->setNombre($funcionNombre);
    }

    public function cambiarPrecioFunciones($numFuncion, $nuevoPrecio)
    {
        $funcionPrecio = $this->getPrecio();
        $funcionPrecio[$numFuncion - 1] = $nuevoPrecio;
        $this->setPrecio($funcionPrecio);
    }

    public function __toString()
    {
      $funcion = "";
      for ($i=0; $i < count($this->getNombre()); $i++) {
          $funcion .= "FUNCIÓN: " . $i + 1 . "\n" .
                      "---------------------- \n" .
                      "\n" .
                      "Nombre: " . $this->getNombre()[$i] . "\n" .
                      "Horario: " . $this->getHorario()[$i] . "\n" .
                      "Duración: " . $this->getDuracion()[$i] . "min \n" .
                      "Precio: $" . $this->getPrecio()[$i] . "\n" .
                      "\n";
      }

      return $funcion;
    }



}
