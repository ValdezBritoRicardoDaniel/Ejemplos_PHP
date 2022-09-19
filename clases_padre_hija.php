<?php

//Ejemplo de clases padre y sus erencias en las clases hij@s

class Padre
{
    public $nombre;
    public $apellido;
    public $fecha_nacimiento;

    public function __construct($nombre, $apellido, $fecha_nacimiento)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fecha_nacimiento = $fecha_nacimiento;
    }
}

class Hija extends Padre
{
    function __construct($nombre, $apellido, $fecha_nacimiento, $email, $telefono, $direccion)
    {
        parent::__construct($nombre, $apellido, $fecha_nacimiento);
        $this->email = $email;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
    }
}

$padre = new Padre('Alpha', 'Bravo', 1980);
var_dump($obj);

$hija = new Hija('Delta', 'Echo', 2001, 'mail@gmail.com', 1234567890, 'Las flores');
var_dump($obj1);
