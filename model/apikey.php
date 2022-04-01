<?php
    require_once("./model/connexio.php");
    Class Apikey{
        public $db;

        public function __construct(){
            $this->db=Connexio::connectar();
        }

        public function add($UserId, $value){
            $query = "INSERT INTO `Api-key` (`user_id`, `api_key`) VALUES (:id, :api_key);";

            $data = [
                'id'=>$UserId,
                'api_key'=>$value
            ];

            $this->db->prepare($query)->execute($data);
        }
    }
?>