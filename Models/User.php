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
            $this->delegate->setFirstName($FirstName);
        }

        public function setLastName($LastName){
            $this->delegate->setLastName($LastName);
        }



        public function setNationality($Nationality){
            $this->delegate->setNationality($Nationality);

        }

        public function setDateOfBirth($DateOfBirth){
            $this->DateOfBirth = $DateOfBirth;
        }

        public function setEmail($Email){
            $this->delegate->setEmail($Email);
        }

        public function setPhoneNumber($PhoneNumber){
            $this->delegate->setPhoneNumber($PhoneNumber);
        }



    
    }


?>