<?php

    require_once("./model/users_m.php");

    class Users {

        $user_recived;

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
                $user_recived = $model->getUser();
                print($user_recived);
            } else {
                
            }

            require_once("./vista/users_v.php");
        }
    }


?>
