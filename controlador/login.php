<?php
    require_once("./model/users_m.php");

    Class Login{
        private $user;
        private $uuid;

        public function __construct($params, $body){
            $bool = $this->validate_username($body);
            $json = new stdClass();

            if($bool){
                $this->uuid = $this->guidv4();
                require("./model/apikey.php");
                $apikey = new Apikey();

                $apikey->add($this->user["id"],$this->uuid);

                $json->uuid = $this->uuid;
            }else{
                http_response_code(400);
                $json->error = "Incorrect password";
            }

            require_once("./vista/login_v.php");
        }


        function validate_username($user){
            $model = new users_model();

            $user_model = $model->getusersByUsername($user->username);

            $result = password_verify($user->password, $user_model["password"]);

            if($result){
                $this->user = $user_model;
            }

            return $result;
        }

        function guidv4($data = null) {
            $data = $data ?? random_bytes(16);
            assert(strlen($data) == 16);
        
            $data[6] = chr(ord($data[6]) & 0x0f | 0x40);

            $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
        
            return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
        }
    }
?>