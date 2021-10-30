<?php
    include_once "Conexion.php";
    include_once "Modelos/Vehiculo.php";

    class ControladorPaginas
    {
        public function plantilla()
        {
        include_once "Vistas/template.php";
        }

        public function obtenerPagina()
        {

            if( isset($_GET['accion']) )
            {
                $accion = $_GET['accion'];
                
                return $this->$accion();
            }

        }


        private function inicio()
        {
            $vehiculos = Vehiculo::consultar();

            return include_once "Vistas/Vehiculo/Inicio.php";
        }

        private function registrar(){

            if($_POST)
            {
                $marca = $_POST['marca'];
                $modelo = $_POST['modelo'];
                $anio = $_POST['anio'];
                $precio = $_POST['precio'];
                
                Vehiculo::registrar($marca, $modelo, $anio, $precio);
            }
            return include_once "Vistas/Vehiculo/RegistrarAuto.php";
        }

        private function editar(){
            if(isset($_GET['id'])){

                $vehiculo =  Vehiculo::buscar($_GET['id']);
            }

            if($_POST)
            {
                print_r($_POST);
                $id = $_POST['id'];
                $marca = $_POST['marca'];
                $modelo = $_POST['modelo'];
                $anio = $_POST['año'];
                $precio = $_POST['precio'];

                Vehiculo::editar($id, $marca, $modelo, $anio, $precio);

                header("Location:./?accion=inicio");
            }

            return include_once "Vistas/Vehiculo/editar.php";
            
        }

        private function borrar()
        {
            if(isset($_GET['id']))
            {
                Vehiculo::borrar($_GET['id']);

                header("Location:./?accion=inicio");
            }
            
        }
    }

?>