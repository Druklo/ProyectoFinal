<?php

use Vehiculo as GlobalVehiculo;

class Vehiculo
    {

        public $Id;
        public $Marca;
        public $Modelo;
        public $Anio;
        public $Precio;

        public function __construct($id, $marca, $modelo, $anio, $precio)
        {
            $this->Id = $id;
            $this->Marca = $marca;
            $this->Modelo = $modelo;
            $this->Anio = $anio;
            $this->Precio = $precio;
        }

        public static function consultar()
        {
            $listaVehiculos = [];
            $conexion = BD::crearConexion();
            $consulta = "SELECT * FROM vehiculos";
            if ($resultado = mysqli_query($conexion, $consulta)) 
            {
                while ($vehiculo= $resultado->fetch_object())
                {

                    $listaVehiculos[] = new Vehiculo($vehiculo->Id, $vehiculo->Marca, $vehiculo->Modelo,$vehiculo->Anio, $vehiculo->Precio);
                }
            }

            return $listaVehiculos;
        }

        public static function borrar($id)
        {
            $conexion = BD::crearConexion();
            $query = "DELETE FROM vehiculos WHERE id = '$id'";
            $exito = mysqli_query($conexion, $query);

            if(!$exito)
            {
                echo "Hubo un error al eliminar el vehiculo: ".mysqli_error($conexion);
            }
        }

        public static function editar($id, $marca, $modelo, $anio, $precio)
        {
            $conexion = BD::crearConexion();
            $query = "UPDATE vehiculos SET 
                                Marca ='$marca', 
                                Modelo='$modelo', 
                                Año='$anio', 
                                Precio='$precio'
                                WHERE id = '$id'";
            $exito = mysqli_query($conexion, $query);

            if(!$exito)
            {
                echo "Hubo un error al actualizar el vehiculo: ".mysqli_error($conexion);
            }
        }

        public static function buscar($id)
        {

            $conexion = BD::crearConexion();

            $query = "SELECT * FROM vehiculos WHERE id = '$id' ";

            $resultado = mysqli_query($conexion, $query);

            if($resultado)
            {
                if (mysqli_num_rows($resultado) > 0)
                {
                    $vehiculo = $resultado->fetch_object();

                    return new Vehiculo($vehiculo->Id, $vehiculo->Marca, $vehiculo->Modelo,$vehiculo->Anio, $vehiculo->Precio);
                }
                else
                {
                    echo "El vehiculo con ese ID no se encontro";
                }
                
            }
            else
            {
                echo "Hubo un error al buscar el vehiculo: ".mysqli_error($conexion);
            }
        }

        public static function registrar($marca, $modelo, $anio, $precio)
        {
            
            $conexion = BD::crearConexion();

            // Codigo SQL para insertar datos en la tabla vehiculos 
            $query = "INSERT INTO vehiculos (Marca, Modelo, Año, Precio) values ('$marca', '$modelo', '$anio', '$precio')";
            $exito = mysqli_query($conexion, $query);
            
            if($exito)
            {
                echo "Se guardaron correctamente los datos";
            }
            else
            {
                echo "Hubo un error al guardar los datos".mysqli_error($conexion);
            }
        }
    }

?>
