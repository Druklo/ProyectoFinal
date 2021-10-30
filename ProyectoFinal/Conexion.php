<?php
    class BD
    {
        private $host = "localhost";		//Nombre del host o server al que nos conectamos
        private $basededatos = "test";	//Nombre de la base de datos
        private $nombreusuario = "root";  	//Nombre de usuario de la BD
        private $contraseña = "";   	//Contraseña de la BD
        private $tabla_db1 = "vehiculos";
        private $conexion;

        public function __construct()
        {
            $conexion = mysqli_connect($this->host, $this->nombreusuario, $this->contraseña, $this->basededatos);

            if (!$conexion) {
                die("La conexion fallo: " . mysqli_connect_error());
            }
            else
            {
                $this->conexion = $conexion;
            }
        }
        
        public function cerrarConexion(){
            mysqli_close($this->conexion);
        }

        public function guardarVehiculo(Vehiculo $user){
            $query = "INSERT INTO $this->tabla_db1 (ID, Marca, Modelo, Año, Precio) 
                      VALUES ('{$user->Id}', '{$user->Marca}', '{$user->Modelo}', '{$user->Precio}')";
            
            $exito = mysqli_query($this->conexion, $query);

            if($exito){
                echo "Se registro correctamente el vehiculo<br>";
            }
            else{
                echo "Hubo un error al registrar el vehiculo: ".mysqli_error($this->conexion);
            }

        }

        
        public function obtenerVehiculoPorId($id){
            $consulta = "SELECT * FROM $this->tabla_db1 WHERE Id = '$id'";
            if ($resultado = mysqli_query($this->conexion, $consulta)) {
                if (mysqli_num_rows($resultado) > 0){
                    //Obtener la lista de vehiculos 
                    while ($vehiculo = $resultado->fetch_object()) {

                        $automovil = new Vehiculo($vehiculo->Id, $vehiculo->Marca, $vehiculo->Modelo, $vehiculo->Anio, $vehiculo->Precio);
                        return $automovil;
                    }
                }
                else
                {
                    echo "No existe ningun vehiculo con ese Id";
                }
            }
            else{
                echo "Hubo un error al obtener vehiculo:  ".mysqli_error($this->conexion);
            }


        }

        public function obtenerAutosPorMarca($marca){
            $vehiculos = [];
            $consulta = "SELECT * FROM $this->tabla_db1 WHERE Marca LIKE '%$marca%'";
            if ($resultado = mysqli_query($this->conexion, $consulta)) {
                //Obtener la lista de usuarios 
                while ($vehiculo = $resultado->fetch_object()) {

                    $vehiculos[] = new Vehiculo($vehiculo->Id, $vehiculo->Marca, $vehiculo->Modelo, $vehiculo->Anio, $vehiculo->Precio);
                }
            }
            else{
                echo "Hubo un error al obtener los vehiculos:  ".mysqli_error($this->conexion);
            }

            return $vehiculos;
        }

        public function actualizarVehiculo(Vehiculo $vehiculo)
        {
            $vehiculoDB = $this->obtenerVehiculoPorId($vehiculo->Id);

            if($vehiculoDB)
            {
                $query = "UPDATE $this->tabla_db1 SET
                Marca = '$vehiculo->nombre',
                Modelo =  '$vehiculo->direccion',
                Año = '$vehiculo->telefono',
                Precio = '$vehiculo->Precio'
                WHERE Id ='{$vehiculo->Id}'";
      
                $exito = mysqli_query($this->conexion, $query);

                if($exito){
                    echo "Se actualizo correctamente el usuario<br>";
                }
                else{
                    echo "Hubo un error al actualizar el usuario: ".mysqli_error($this->conexion);
                }
            }
        }

        public function eliminarVehiculoPorId($id)
        {

            $usuarioDB = $this->obtenerVehiculoPorId($id);
            if($usuarioDB)
            {
                $query = "DELETE FROM $this->tabla_db1 WHERE ID = '$id'";

                $exito = mysqli_query($this->conexion, $query);

                if($exito){
                    echo "Se elimino correctamente el vehiculo<br>";
                }
                else{
                    echo "Hubo un error al eliminar el vehiculo: ".mysqli_error($this->conexion);
                }
            }
        }

        ##private static $conexion=NULL;

        public static function crearConexion()
        {

            if(!isset( self::$conexion))
            {

                self::$conexion = mysqli_connect("localhost","root", "", "vehiculos");

                if (!self::$conexion) 
                {
                    die("La conexion fallo: " . mysqli_connect_error());
                }
            }

            return self::$conexion;
        }
    }
?>
