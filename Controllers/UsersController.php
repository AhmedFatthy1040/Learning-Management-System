<?php

namespace Controllers;

require_once(__DIR__ . "/DBController.php");
require_once(__DIR__ . "/../Models/Mentor.php");
use Mentor;

class UsersController
{
    protected $db;

    public function GetMentors() {
        $this->db = new DBController();
        if ($this->db->connect()) {
            $query = "select * from mentor";
            return $this->db->Select($query);
        }
        else {
            echo "Error in Database Connection";
            return false;
        }
    }

    public function AddMentors(Mentor $Mentor) {
        $this->db = new DBController();
        $fname = $Mentor->getFirstName();
        $lname = $Mentor->getLastName();
        $phone = $Mentor->getPhoneNumber();
        $password = $Mentor->GetPassword();
        $email = $Mentor->getEmail();
        $salary = $Mentor->getSalary();
        $nationality = $Mentor->getNationality();
        $gender = $Mentor->GetGender();
        $birthdate = $Mentor->getDateOfBirth();
        $final_rate = 0;

        if ($this->db->connect()) {
            $query = "insert into mentor(fname, lname, password, email, nationality, gender, birthdate, phone, salary) values ('$fname' , '$lname', '$password', '$email', '$nationality', '$gender', '$birthdate', '$phone', $salary);";
            return $this->db->query($query);
        }
        else {
            echo "Error in Database Connection";
            return false;
        }
    }

}