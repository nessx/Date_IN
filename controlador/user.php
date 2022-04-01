<?php
    require_once("./model/users_m.php");
    class user{    
        public function __construct($params, $body){
            $method = array_shift($params);
            switch ($method){
                case "GET":
                    $this->getUsers($params);
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
                switch (strtolower($params[1])){
                    case "id":
                        $user = $model->getusersById($params[1]);
                        break;
                    default:
                        echo "bad request";
                }
            }
            require_once("./vista/user_v.php");
        }


        private function notImplementedMethodUser($params, $method){
            header('Content-Type: application/json');
            echo json_encode(array("error"=> "Not implemented method!", "method" => $method, "params" => $params)).PHP_EOL;
        }
    }
?>