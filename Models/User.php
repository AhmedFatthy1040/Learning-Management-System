<?php 
    include_once("person.php");
    require_once("Mentor.php");


    class User extends Person{

        private $FirstName;
        private $LastName;
        Private $Nationality = "EG";
        Private $DateOfBirth;
        Private $Email;
        Private $PhoneNumber;
        Private $LearningPath;
        private $delegate;
        public function User() {
            $this->delegate = new Mentor();
        }
        Public function getFirstName(){
            return $this->FirstName;
        }

        Public function getLastName(){
            return $this->LastName;
        }
        Public function Nationality(){
            return $this->Nationality;
        }
        Public function getDateOfBirth(){
            return $this->DateOfBirth;
        }
        public function getEmail(){
            return $this->Email;
        }
        Public function getPhoneNumber(){
            return $this->PhoneNumber;
        }
        Public function getLearningPath(){
            return $this->LearningPath;
        }

        public function setLearningPath($LearningPath){
            if(!is_numeric($LearningPath))
            {
                echo "\"{$LearningPath}\" isn't a numeric value";
            }
            else
            {
                    $this->LearningPath = $LearningPath;
            }
        }


        public function setFirstName($FirstName){
            $isThereNumber = false;
            for ($i = 0; $i < strlen($FirstName); $i++) {
                if (ctype_digit($FirstName[$i])) {
                    $isThereNumber = true;
                    break;
                }
            }

            if ( $isThereNumber ) {
                echo "\"{$FirstName}\" has number(s).";
            } else {
                $this->FirstName=$FirstName;
            }
        }

        public function setLastName($LastName){
            $isThereNumber = false;
            for ($i = 0; $i < strlen($LastName); $i++) {
                if ( ctype_digit($LastName[$i]) ) {
                    $isThereNumber = true;
                    break;
                }
            }

            if ( $isThereNumber ) {
                echo "\"{$LastName}\" has number(s).";
            } else {
                $this->LastName=$LastName;
            }
        }



        public function setNationality($Nationality){
            $isThereNumber = false;
            for ($i = 0; $i < strlen($Nationality); $i++) {
                if ( ctype_digit($Nationality[$i]) ) {
                    $isThereNumber = true;
                    break;
                }
            }

            if ( $isThereNumber ) {
                echo "\"{$Nationality}\" has number(s).";
            } else {
                $this->Nationality=$Nationality;
            }

        }

        public function setDateOfBirth($DateOfBirth){
            $this->DateOfBirth = $DateOfBirth;
        }

        public function setEmail($Email){
            $isThereNumber = false;
            for ($i = 0; $i < strlen($Email); $i++) {
                if ($Email[$i] == '@') {
                    $isThereNumber = true;
                    break;
                }
            }

            if ( $isThereNumber ) {
                $this->Email=$Email;
            }
            else {
                echo "\"{$Email}\" doesn't contain the '@' sign";
            }
        }

        public function setPhoneNumber($PhoneNumber){

        }



    
    }


?>