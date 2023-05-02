<?php 

    abstract class Person
    {
        Private $Id;
        Private $Password;
        Private $Gender;

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

        public function GetGender()
        {
            return $this->Gender;
        }

        public function SetGender($Gender)
        {
            $this->Gender=$Gender;
        }

    }

?>