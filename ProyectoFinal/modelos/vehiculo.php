<?php
    class Vehiculo{

        public $Id;
        public $Marca;
        public $Modelo;
        public $Año;
        public $Precio;

        public function __construct($id, $marca, $modelo, $año, $precio)
        {
            $this->Id = $id;
            $this->Marca = $marca;
            $this->Modelo = $modelo;
            $this->Año = $año;
            $this->Precio = $precio;
        }

        public static function consultar()
        {
            $listaVehiculos = [];
            $conexion = BD::crearConexion();
            $consulta = "SELECT * FROM automoviles";
            if ($resultado = mysqli_query($conexion, $consulta)) 
            {
                while ($automovil= $resultado->fetch_object())
                {

                    $listaVehiculos[] = new Vehiculo($automovil->ID, $automovil->Marca, $automovil->Modelo, $automovil->Año, $automovil->Precio);
                }
            }

            return $listaVehiculos;
        }

        public static function borrar($id){
            $conexion = BD::crearConexion();
            $query = "DELETE FROM automoviles WHERE id = '$id'";
            $exito = mysqli_query($conexion, $query);

            if(!$exito)
            {
                echo "Hubo un error al eliminar el producto: ".mysqli_error($conexion);
            }
        }

        public static function editar($Id, $Marca,$Modelo, $Año, $Precio){
            $conexion = BD::crearConexion();
            $query = "UPDATE automoviles SET 
                                Nombre ='$Marca', 
                                Cantidad='$Modelo', 
                                Año='$Año',
                                Precio='$Precio'  
                                WHERE ID = '$Id'";
            $exito = mysqli_query($conexion, $query);

            if(!$exito)
            {
                echo "Hubo un error al actualizar el producto: ".mysqli_error($conexion);
            }
        }

        

        public static function buscar($Id)
        {
            //Obtenemos una conexion a la base de datos
            $conexion = BD::crearConexion();
            //Armamos la consulta que sera ejecutada en la base de datos
            $query = "SELECT * FROM automoviles WHERE ID = '$Id' ";
            //Ejecutamos la consulta
            $resultado = mysqli_query($conexion, $query);

            //Vericamos que se halla ejecutado correctamente la consulta
            if($resultado)
            {
                //Verificamos que halla encontrado un resultado
                if (mysqli_num_rows($resultado) > 0)
                {
                    //Obtenemos el resultado como un objeto
                    $automovil = $resultado->fetch_object();

                    //Devolvemos un objeto del tipo Producto
                    return new Vehiculo($automovil->Id, $automovil->Marca, $automovil->Modelo, $automovil->Año, $automovil->Precio);
                }
                else
                {
                    echo "El producto con ese ID no se encuentro";
                }
                
            }
            else
            {
                echo "Hubo un error al buscar el producto: ".mysqli_error($conexion);
            }
        }

        public static function registrar($marca, $modelo, $año, $precio)
        {
            
            $conexion = BD::crearConexion();

            // Codigo SQL para insertar datos en la tabla personas 
            $query = "INSERT INTO automoviles (Marca, Modelo, Año, Precio) values ('$marca', '$modelo', '$año', '$precio')";
            $exito = mysqli_query($conexion, $query);
            
            if($exito)
            {
                echo "Se guardaron correctamente los datos";
            }
            else
            {
                echo "Hubo un error al guardar los datos ".mysqli_error($conexion);
            }
        }
    }
?>