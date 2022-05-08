<?php
    require_once("./model/Usuari.php");
    require_once("./model/login_m.php");
    require_once("./model/action.php");
    require_once("./model/connected_m.php");
    class action{
        public function __construct($params, $body){
            $method = array_shift($params);
            $api_key = array_shift($params);
            switch ($method){
                case "POST":
                    $this->postLike($params, $body, $api_key);
                    break;
                case "OPTIONS":
                    // Necessari per CORS preflight.
                    break;
                default:
                    http_response_code(405); // Mètode no permès!
            }
        }

        private function postLike($params, $body, $api_key){
            $persistencia = new Usuari_persistencia();
            $model = new Connected_model();

            $destination = $params[0];
            $action = $params[1];
        
            $c_id = $model->getConnectedUser($api_key);
            if ($c_id){
                $current_id = $c_id->get_id();
                $candidate = new Action_Model($current_id, $destination, $action);
                $stored_action = $persistencia->store_action($candidate);
                http_response_code(201); 
            }else{
                http_response_code(401);
            }
            
        }
    }
?>