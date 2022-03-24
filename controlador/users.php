<?php
    require_once("./model/users_m.php");
    class users{    
        public function __construct($params, $body){
            $method = array_shift($params);
            switch ($method){
                case "GET":
                    $this->getUsers($params);
                    break;
                case "POST":
                    //$this->postPelicula($params, $body);
                    break;
                default:
                    $this->notImplementedMethodUser($params, $body, $method);
                    break;
            }
        }

        private function getUsers($params){
            $model = new users_model();
            if (count($params) == 0){
                $user = $model->getUsers();
            }else{
                switch (strtolower($params[0])){
                    case "id":
                        $user = $model->getusersById($params[1]);
                        break;
                    default:
                        echo "bad request";
                }
            }
            require_once("./vista/user_v.php");
        }

        /*private function postPelicula($params, $body){
            $model = new user_model();
            $newId = $model->appendPelicula($body);
            $user = $model->getPeliById($newId);
            http_response_code(201);
            require_once("./vista/user.php");
        }*/

        private function notImplementedMethodUser($params, $method){
            header('Content-Type: application/json');
            echo json_encode(array("error"=> "Not implemented method!", "method" => $method, "params" => $params)).PHP_EOL;
        }
    }
?>