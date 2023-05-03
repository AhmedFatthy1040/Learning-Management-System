<?php

namespace Controllers;

require_once(__DIR__ . "/DBController.php");
require_once(__DIR__ . "/../Models/Mentor.php");
require_once(__DIR__ . "/../Models/Course.php");
use Mentor;
use Course;

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
    public function GetCourses() {
        $this->db = new DBController();
        if ($this->db->connect()) {
            $query = "SELECT id, name, description, requirements, mentor_id, learning_path_id FROM course ORDER BY id desc";
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
    public function AddCourses(Course $Course) {
        $this->db = new DBController();
        $Name = $Course->GetName();
        $Requirements = $Course->GetRequirements();
        $Description = $Course->GetDescription();
        $MentorID = $Course->GetMentorID();
        $LearningPathID = $Course->GetLearningPathID();

        if ($this->db->connect()) {
            $query = "insert into course(name, description, requirements, mentor_id, learning_path_id) values ('$Name' , '$Description', '$Requirements', '$MentorID', '$LearningPathID');";
            return $this->db->query($query);
        }
        else {
            echo "Error in Database Connection";
            return false;
        }
    }

    public function DeleteFromTable($Type, $ID) {
        $this->db = new DBController();
        if ($this->db->connect()) {
            $query = "DELETE FROM $Type WHERE id = $ID";
            return $this->db->query($query);
        }
        else {
            echo "Error in Database Connection";
            return false;
        }

    }
    public function GetUsers() {
        $this->db = new DBController();
        if ($this->db->connect()) {
            $query = "SELECT id, fname, lname, gender, email, phone FROM user ORDER BY id desc";
            return $this->db->Select($query);
        }
        else {
            echo "Error in Database Connection";
            return false;
        }
    }

    public function AddLPS(\Learning_Path $LP) {
        $this->db = new DBController();
        $Name = $LP->getLearningPathName();
        $id = $LP->getLearningPathId();
    }
    public function GetCoursesForMentor($MnetorID) {
        $this->db = new DBController();
        if ($this->db->connect()) {
            $query = "SELECT id, name, description, requirements, mentor_id, learning_path_id FROM course WHERE mentor_id = '$MnetorID' ORDER BY id desc";
            return $this->db->Select($query);
        }
        else {
            echo "Error in Database Connection";
            return false;
        }
    }

}