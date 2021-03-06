<?php
    class DatabaseExeption extends Exception {
            //Mensaje personalizado para el usuario, cuando se produce un error en la BD
            public function errorMessage() {
                $errorMsg = 'Lo sentimos: '.$this->getMessage();

                return $errorMsg;
            }
        }

    class FormularioException extends Exception {
        //Mensaje personalizado para el usuario, cuando se produce un error en el formulario
        public function errorMessage() {
            $errorMsg = "Debe completar los campos obligatorios: ".$this->getMessage(); 
            
            return $errorMsg;
        }
    }

    //Convertimos errores en excepciones
    function errorHandler($error_level,$error_message, $error_file,$error_line) 
    {
        guardarError($error_message, $error_line,$error_file);
        throw new Exception("");
    }


    function validarForm($marca, $modelo, $año, $precio)
    {
        $mensaje = '';

        if(empty($marca))
        {
            $mensaje = ' Marca';
        }

        if(empty($modelo))
        {
            $mensaje .= ' Modelo';
        }

        if(empty($año))
        {
            $mensaje.= ' Año';
        }

        if(empty($precio))
        {
            $mensaje.= ' Precio';
        }
        
        if(!empty($mensaje))
        {

            throw new FormularioException($mensaje);
        }
    }
?>