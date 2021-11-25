<?php
    //Tranferimos los errores de MYSQL a exepciones PHP
    //Si no se usa este codigo los errores de MYSQL no podran ser capturados como expeciones
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    class Vehiculo
    {

        public $id;
        public $Marca;
        public $Modelo;
        public $Año;
        public $Precio;

        public function __construct($id, $marca, $modelo, $año, $precio)
        {
            $this->id = $id;
            $this->Marca = $marca;
            $this->Modelo = $modelo;
            $this->Año = $año;
            $this->Precio = $precio;
        }

        public static function consultar()
        {
            $listavehiculos = [];
            $conexion = BD::crearConexion();
            $consulta = "SELECT * FROM vehiculos";

            try
            {
                $resultado = mysqli_query($conexion, $consulta);
            }
            catch(Exception $e){
                //Guardamos el mensaje para el programador
                guardarError($e->getMessage(), $e->getLine() ,$e->getFile());
                //Lanzamos un mensaje para el usuario
                throw new DatabaseExeption(" No se puedo obtener los datos de los vehiculos");
            }

            //Obtener la lista de usuarios 
            while ($vehiculo= $resultado->fetch_object()) 
            {
                $listavehiculos[] = new Vehiculo($vehiculo->id, $vehiculo->Marca, $vehiculo->Modelo, $vehiculo->Año, $vehiculo->Precio);
            }
            
            return $listavehiculos;
            
        }

        public static function consultarPorMarca($marca)
        {
            $listavehiculos = [];
            $conexion = BD::crearConexion();
            $consulta = "SELECT * FROM vehiculos WHERE Marca LIKE '%$marca%'";

            try
            {

                $resultado = mysqli_query($conexion, $consulta);
            }
            catch(Exception $e){
                //Guardamos el mensaje para el programador
                guardarError($e->getMessage(), $e->getLine() ,$e->getFile());
                //Lanzamos un mensaje para el usuario
                throw new DatabaseExeption(" No se puedo obtener los datos de los vehiculos");
            }

            //Obtener la lista de usuarios 
            while ($vehiculo= $resultado->fetch_object()) 
            {

                $listavehiculos[] = new Vehiculo($vehiculo->id, $vehiculo->Marca, $vehiculo->Modelo, $vehiculo->Año, $vehiculo->Precio);
            }
            
            return $listavehiculos;
            
        }

        public static function consultarPorModelo($modelo)
        {
            $listavehiculos = [];
            $conexion = BD::crearConexion();
            $consulta = "SELECT * FROM vehiculos WHERE Modelo LIKE '%$modelo%'";

            try
            {
                $resultado = mysqli_query($conexion, $consulta);
            }
            catch(Exception $e){
                //Guardamos el mensaje para el programador
                guardarError($e->getMessage(), $e->getLine() ,$e->getFile());
                //Lanzamos un mensaje para el usuario
                throw new DatabaseExeption(" No se puedo obtener los datos de los vehiculos");
            }

            //Obtener la lista de usuarios 
            while ($vehiculo= $resultado->fetch_object()) 
            {

                $listavehiculos[] = new Vehiculo($vehiculo->id, $vehiculo->Marca, $vehiculo->Modelo, $vehiculo->Año, $vehiculo->Precio);
            }
            
            return $listavehiculos;
            
        }

        public static function consultarPorMasAntiguo()
        {
            $listavehiculos = [];
            $conexion = BD::crearConexion();
            $consulta = "SELECT * FROM vehiculos WHERE Año ";

            try
            {
                $resultado = mysqli_query($conexion, $consulta);
            }
            catch(Exception $e){
                //Guardamos el mensaje para el programador
                guardarError($e->getMessage(), $e->getLine() ,$e->getFile());
                //Lanzamos un mensaje para el usuario
                throw new DatabaseExeption(" No se puedo obtener los datos de los vehiculos");
            }

            //Obtener la lista de usuarios 
            while ($vehiculo= $resultado->fetch_object()) 
            {

                $listavehiculos[] = new Vehiculo($vehiculo->id, $vehiculo->Marca, $vehiculo->Modelo, $vehiculo->Año, $vehiculo->Precio);
            }
            
            return $listavehiculos;
            
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

        public static function editar($id, $marca, $modelo, $año, $precio)
        {
            $conexion = BD::crearConexion();
            $query = "UPDATE vehiculos SET 
                                Marca ='$marca', 
                                Modelo='$modelo',
                                Año='$año', 
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
            //Obtenemos una conexion a la base de datos
            $conexion = BD::crearConexion();
            //Armamos la consulta que sera ejecutada en la base de datos
            $query = "SELECT * FROM vehiculos WHERE id = '$id'";

            //Vericamos que se ejecute correctamente la consulta y en caso contrario, capturamos el error
            try
            {
                $resultado = mysqli_query($conexion, $query);
            }
            catch(Exception $e)
            {
                //Guardamos el mensaje para el programador
                guardarError($e->getMessage(), $e->getLine() ,$e->getFile());
                //Lanzamos un mensaje para el usuario
                throw new DatabaseExeption(" No se pudo obtener los datos del vehiculo");
            }

            if (mysqli_num_rows($resultado) > 0)
            {
                //Obtenemos el resultado como un objeto
                $vehiculo = $resultado->fetch_object();

                return new Vehiculo($vehiculo->id, $vehiculo->Marca, $vehiculo->Modelo, $vehiculo->Año, $vehiculo->Precio);
            }
            else
            {
                throw new DatabaseExeption(" El vehiculo con ese ID no se encontro");
            }
            
        }

        public function buscarMarca($marca)
        {
            $vehiculos = [];
            $consulta = "SELECT * FROM $this->tabla_db1 WHERE Marca LIKE '%$marca%'";
            
            if ($resultado = mysqli_query($this->conexion, $consulta)) 
            {
                //Obtener la lista de usuarios 
                while ($vehiculo = $resultado->fetch_object()) 
                {

                    $vehiculos[] = new Vehiculo($vehiculo->Id, $vehiculo->Marca, $vehiculo->Modelo, $vehiculo->Anio, $vehiculo->Precio);
                }
            }
            else
            {
                echo "Hubo un error al obtener los vehiculos:  ".mysqli_error($this->conexion);
            }

            return $vehiculos;
        }

        public static function registrar($marca, $modelo, $año, $precio)
        {            
            $conexion = BD::crearConexion();

            // Codigo SQL para insertar datos en la tabla personas 
            $query = "INSERT INTO vehiculos (Marca, Modelo, Año, Precio) values ('$marca', '$modelo', '$año', '$precio')";
            try
            {
                $exito = mysqli_query($conexion, $query);

                if($exito)
                {
                    echo "Se guardaron correctamente los datos";
                }
            }
            catch(Exception $e)
            {
                //Guardamos el mensaje para el programador
                guardarError($e->getMessage(), $e->getLine() ,$e->getFile());
                //Lanzamos un mensaje para el usuario
                throw new DatabaseExeption("hubo un error al guardar los datos");
            }
        }
    }
?>