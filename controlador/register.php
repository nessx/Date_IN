<?php
    require_once("./model/users_m.php");
    class register{    
        public function __construct($params, $body){
            $method = array_shift($params);
            switch ($method){
                case "POST":
                    $this->postUser($params, $body);
                    break;
                default:
                    $this->notImplementedMethodUser($params, $body, $method);
                    break;
            }
        }

        private function postUser($params, $body){
            $model = new users_model();
            $newId = $model->appendUser($body);
            $user = $model->getusersById($newId);
            http_response_code(201);
            require_once("./vista/register_v.php");
        }

        private function notImplementedMethodUser($params, $method){
            header('Content-Type: application/json');
            echo json_encode(array("error"=> "Not implemented method!", "method" => $method, "params" => $params)).PHP_EOL;
        }
    }
?>