<?php
    require_once "Message.php" ;
    
    class Inbox extends Message{

        private $owner_id;
        private $message;

        public function __construct($owner_id){
            $this->owner_id=$owner_id;
        }

        public function setMessage($message){
            $this->message=$message;
        }

        public function getOwnerId(){
            return $this->owner_id;
        }

        public function getMessage(){
            return $this->Message;
        }

    }

?>