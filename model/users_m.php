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

        public function getusersByUsername($username){
            $consulta = "SELECT * FROM Users WHERE username ='$username';";
            $result = $this->db->query($consulta);
            while ($fila=$result->fetch(PDO::FETCH_ASSOC)){
                return $fila;
            }
            return null;
        }

        public function appendUser($users){
            $new_id = -1;
            if ($users){
                $consulta = "SELECT id FROM Users ORDER BY id DESC LIMIT 1;";
                $result = $this->db->query($consulta);
                $last_id = $result->fetch(PDO::FETCH_ASSOC)["ID"];
                $new_id = $last_id + 1;
                $consulta = "INSERT INTO Users (`id`, `username`, `name`, `last_name`, `email`, `password`, `description`) VALUES (:id, :username, :name, :last_name, :email, :password, :description);";
                $dades = [
                    'id'=>$new_id,
                    'username'=>$users->username,
                    'name'=>$users->name,
                    'last_name'=>$users->last_name,
                    'password'=>password_hash($users->password, PASSWORD_DEFAULT),
                    'description'=>$users->description
                ];
                $res_insert = $this->db->prepare($consulta)->execute($dades);
            }
            return $new_id;
        }

    }
?>