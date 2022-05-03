<?php
    require_once("./model/Usuari.php");
    require_once("./model/login_m.php");
    class like{
        public function __construct($params, $body){
            $method = array_shift($params);
            $api_key = array_shift($params);
            switch ($method){
                case "POST":
                    $this->postLike($params, $body);
                    break;
                case "OPTIONS":
                    // Necessari per CORS preflight.
                    break;
                default:
                    http_response_code(405); // Mètode no permès!
            }
        }

        private function postLike($params, $body){
            $model = new Action_Model();
            $usuari = null;

            $current = $params[0];
            $destination = $params[1];

            $candidate = new Usuari($nick, $password,null);
            $stored_user = $model->comprovar_password($candidate);
            $login_ok = ($stored_user != NULL);
            if ($login_ok){
                $api_key = App::guidv4();
                $stored_user->append_x_api_key($api_key);
                $stored_user->store_me();
                http_response_code(201);
                require_once("./vista/login_v.php");
            }else{
                http_response_code(401);
            }
            
        }
    }
?>