<?php

    require_once("./model/users_m.php");

    class Users {

        public function __construct($params, $body){
        
            $method = array_shift($params);
            switch ($method){
                case "GET":
                    $this->getUsuario($params);
                    break;
                case "POST":
                    break;
                case "DELETE":
                    break;
                default:
                    break;
            }
        
        }

        private function getUsuario($params){
            $model = new Users_model();
            if (count($params) == 0){
                $user = $model->getUser();
            } else {
                switch (strtolower($params[0])){
                    case "id":
                        $user = $model->getUser_by_Id($params[1]);
                        break;
                    default:
                        echo "bad request";
                }
            }

        
        }
    }


?>