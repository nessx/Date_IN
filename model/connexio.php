<?php
    class Connexio {
        public static function connectar(){
            try {
                $db = new PDO("mysql:host=orangeyoutube.local;dbname=project", "nessx", "santana13");
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $db->exec("SET CHARACTER SET UTF8");
            }
            catch(Exception $e){
                die("Error de conexión:" . $e->getMessage());
            }
            return $db;
        }
    }
?>