<?php 
    class BD{

        //atributo estatico donde guardaremos la conexion
        private static $conexion=NULL;

        public static function crearConexion()
        {

            //Verificamos que la conexion no este creada
            if(!isset( self::$conexion))
            {

                //Si no esta creada pasamos a crearla
                try{
                    self::$conexion = mysqli_connect("localhost","root", "", "vehiculos");
                }
                catch(Exception $e)
                {
                    //Guardamos el mensaje para el programador
                    guardarError($e->getMessage(), $e->getLine() ,$e->getFile());
                    //Lanzamos un mensaje para el usuario
                    throw new DatabaseExeption(" No se pudo conectarnos a la base de datos");
                }
                
            }

            return self::$conexion;
        }
    }
?>