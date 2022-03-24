<?php
    Class users_model {
        private $db;
        private $users;
        public function __construct(){
            require_once("./model/connexio.php");
            $this->db=Connexio::connectar();
            $this->users=array();
        }

        public function getUsers(){
            $consulta = "SELECT * FROM Users";
            $result = $this->db->query($consulta);
            while ($fila=$result->fetch(PDO::FETCH_ASSOC)){
                $this->users[]=$fila;
            }
            return $this->users;
        }

        public function getusersById($id){
            $consulta = "SELECT * FROM Users WHERE id =". $id .";";
            $result = $this->db->query($consulta);
            while ($fila=$result->fetch(PDO::FETCH_ASSOC)){
                return $fila;
            }
            return null;
        }

        /*
        public function appendPelicula($pelicula){
            $new_id = -1;
            if ($pelicula){
                $consulta = "SELECT ID FROM PELICULA ORDER BY ID DESC LIMIT 1;";
                $result = $this->db->query($consulta);
                $last_id = $result->fetch(PDO::FETCH_ASSOC)["ID"];
                $new_id = $last_id + 1;
                $consulta = "INSERT INTO PELICULA (ID, TITULO, ANYO, PUNTUACION, VOTOS) VALUES(:id, :titulo, :anyo, :puntuacion, :votos);";
                $dades = [
                    'id'=>$new_id,
                    'titulo'=>$pelicula->titulo,
                    'anyo'=>$pelicula->anyo,
                    'puntuacion'=>$pelicula->puntuacion,
                    'votos'=>$pelicula->votos
                ];
                $res_insert = $this->db->prepare($consulta)->execute($dades);
            }
            return $new_id;
        }*/

    }
?>