<?php
require_once 'Usuari_persistencia.php';
    Class Action_Model {
        private $current_user = null;
        private $destination_user = null;
        private $action = null;

        public function __construct($current_user, $destination_user, $action){
            $this->current_user = $current_user;
            $this->destination_user = $destination_user;
            $this->action = $action;
            $this->persistencia = new Usuari_persistencia();
        }
    
        public function get_current_user(){
            return $this->current_user;
        }

        public function set_current_user($param){
            $this->current_user = $param;
        }

        public function get_destination_user(){
            return $this->destination_user;
        }

        public function set_destination_user($param){
            $this->destination_user = $param;
        }

        public function get_action(){
            return $this->action;
        }

        public function set_action($param){
            $this->action = $param;
        }
        
        public function store_me(){
            $this->id = $this->persistencia->store_usuari($this);
        }
        
    }
?>