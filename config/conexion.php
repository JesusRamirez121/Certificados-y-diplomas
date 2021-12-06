<?php
        /* clase Conectar */
        class Conectar{

            protected $dbh;

            /* Funcion protegida de la cadena de conexion  */

            protected function Conexion(){
                try{
                    /* Cadena de conexión */
                    $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=diplomas","root","");
                    return $conectar;
                } catch (Exception $e){
                    /* En caso de tener un problema en la cadena de conexión */
                    print "¡Error BD: ". $e->getMessage() . "<br/>";
                    die();
                }
            }

            /* Impedir problemas con los caracteres especiales como la ñ o tildes */
            public function set_names(){

                return $this->dbh->query("SET NAMES 'utf8'");

            }

            /* Ruta principal del proyecto */
            public function ruta(){

                return "http://localhost/PERSONAL_CertificadosDiplomas/";

            }

        }


?>