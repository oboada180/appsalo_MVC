<?php

namespace Model;

class Servicio extends ActiveRecord {
    //BD
    protected static $tabla = 'servicios';
    protected static $columnasDB = ['id', 'nombre', 'precio'];

    //atributos
    public $id;
    public $nombre;
    public $precio;

    public function __construct($args=[])
    {
        $this->id=$args['id'] ?? null;
        $this->nombre=$args['nombre'] ?? '';
        $this->precio=$args['precio'] ?? '';
    }

    public function Validar() {
        if(!$this->nombre){
            self::$alertas['error'] [] = 'El Nombre del servicio es Obligatorio';
        }
        if(!$this->precio){
            self::$alertas['error'] [] = 'El Precio del Servicio es Obligatorio';
        }
        if(!is_numeric($this->precio)){
            self::$alertas['error'] [] = 'El Precio del Servicio debe ser solo numeros';
        }
        return self::$alertas;
    }
}