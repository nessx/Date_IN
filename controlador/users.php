<?php
    require_once("./model/Usuari.php");
    require_once("./model/login_m.php");
    require_once("./model/connected_m.php");
    class users{
        public function __construct($params, $body){
            $method = array_shift($params);
            $api_key = array_shift($params);
            switch ($method){
                case "GET":
                    $this->getusers($params, $api_key);
                    break;
                case "OPTIONS":
                    // Necessari per CORS preflight.
                    break;
                default:
                    http_response_code(405); // Mètode no permès!
            }
        }

        private function getUsers($params, $api_key){
            $persistencia = new Usuari_persistencia();
            $model = new Connected_model();

            $c_id = $model->getConnectedUser($api_key);
            if ($c_id && count($params) == 0){
                $current_id = $c_id->get_id();
                $users = $persistencia->get_usuaris($current_id);
                require_once("./vista/users.php");
                http_response_code(201);
            }else{
                http_response_code(401);
            }
            
        }
    }
?>