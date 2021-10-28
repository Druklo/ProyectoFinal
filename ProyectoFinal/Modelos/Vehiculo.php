<?php

    class Vehiculo
    {

        public $Id;
        public $Marca;
        public $Modelo;
        public $Anio;
        public $Precio;
        //catidad ??

        public function __construct($id, $marca, $modelo, $anio, $precio)
        {
            $this->Id = $id;
            $this->Marca = $marca;
            $this->Modelo = $modelo;
            $this->Anio = $anio;
            $this->Precio = $precio;
        }
    }

?>