<?php 

    abstract class Person
    {
        Private $Id;
        Private $Password;

        public function SetPassword($Password)
        {
            $this->Password=$Password;
        }
        public function GetPassword()
        {
            return $this->Password;
        }
        
        public function GetId()
        {
            return $this->Id;
        }

        public function SetId($Id)
        {
           return $this->Id=$Id;
        }
    }


?>