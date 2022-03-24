<?php
    Class Users_model {
        private $db;
        private $users;
        public function __construct(){
            require_once("./model/connexio.php");
            $this->db=Connexio::connectar();
            $this->users=array();
        }

        public function getUser(){
            $consulta = "SELECT * FROM Users";
            $result = $this->db->query($consulta);
            while ($fila=$result->fetch(PDO::FETCH_ASSOC)){
                $this->users[]=$fila;
            }
            return $this->users;
        }

        public function getUser_by_Id($id){
            $consulta = "SELECT * FROM Users";
            $result = $this->db->query($consulta);
            while ($fila=$result->fetch(PDO::FETCH_ASSOC)){
                $this->users[]=$fila;
            }
            return $this->users;
        }

        
    }
?>
