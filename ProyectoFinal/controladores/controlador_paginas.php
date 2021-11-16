<?php
    include_once "conexion.php";
    include_once "modelos/vehiculo.php";

    class ControladorPaginas{

        public function plantilla(){
            //Plantilla principal de la aplicacion
            include_once "vistas/template.php";
        }

        public function obtenerPagina(){

            if( isset($_GET['accion']) ){
                
                //Obtenemos el valor del boton del menu que se apreto
                $accion = $_GET['accion'];
                
                //Llamamos al metodo que tenga el mismo nombre que la accion 
                return $this->$accion();
            }

        }

        //Carga de la vista inicio, a partir de los datos obtenidos de la base de datos
        private function inicio(){
            $automoviles = Vehiculo::consultar();

            return include_once "vistas/producto/inicio.php";
        }

        private function registrar(){
            //Verificamos que los datos se hallan enviado por el metodo POST
            if($_POST){
                $Marca = $_POST['Marca'];
                $Modelo = $_POST['Modelo'];
                $Año = $_POST['Año'];
                $Precio = $_POST['Precio'];
                Vehiculo::registrar($Marca, $Modelo, $Año, $Precio);
            }
            return include_once "vistas/producto/registrar.php";
        }

        private function editar(){
            if(isset($_GET['ID'])){
                $automoviles =  Vehiculo::buscar($_GET['ID']);
            }

            if($_POST){
                print_r($_POST);
                $Id = $_POST['ID'];
                $Marca = $_POST['Marca'];
                $Modelo = $_POST['Modelo'];
                $Año = $_POST['Año'];
                $Precio = $_POST['Precio'];
                Vehiculo::editar($Id, $Marca, $Modelo, $Año, $Precio);
                header("Location:./?accion=inicio");
            }

            return include_once "vistas/producto/editar.php";
            
        }

        private function borrar(){
            if(isset($_GET['ID'])){
                Vehiculo::borrar($_GET['ID']);

                header("Location:./?accion=inicio");
            }
            
        }
    }

?>