<?php 
include_once("person.php");


class Mentor extends Person{

    private $FirstName;
    private $LastName;
    private $Rate;
    Private $Nationality = "EG";
    Private $DateOfBirth;
    Private $Email;
    Private $PhoneNumber;
    Private $Salary;

    Public function getFirstName(){
        return $this->FirstName;
    }

    Public function getLastName(){
        return $this->LastName;
    }
    Public function getRate(){
        return $this->Rate;
    }
    Public function Nationality(){
        return $this->Nationality;
    }
    Public function getDateOfBirth(){
        return $this->DateOfBirth;
    }
    Public function getEmail(){
        return $this->Email;
    }
    Public function getPhoneNumber(){
        return $this->PhoneNumber;
    }
    Public function getSalary(){
        return $this->Salary;
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
        

    public function setRate($Rate){
        if(!is_numeric($Rate))
        {
            echo "\"{$Rate}\" isn't a numeric value";
        }
        else
        {
            if(!$this->Rate)
            {
                $this->Rate=$Rate;
            }
            else
            {
                $this->Rate = ($this->Rate + $Rate) / 2;
            }
        }
    }

    public function setNationality($Nationality){
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
        if(!is_numeric($PhoneNumber))
        {
            echo "\"{$PhoneNumber}\" isn't a numeric value";
        }
        else
        {
                $this->PhoneNumber = $PhoneNumber;
        }
        }

        public function setSalary($Salary){
            if(!is_numeric($Salary))
            {
                echo "\"{$Salary}\" isn't a numeric value";
            }
            else
            {
                    $this->Salary = $Salary;
            }
            }
    
    }


?>