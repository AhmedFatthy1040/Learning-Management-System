<?php

namespace Controllers;


use User;

require_once(__DIR__ . "/../Models/User.php");
require_once(__DIR__ . "/DBController.php");

class AuthController
{
    // MVC Design Pattern
    protected $db;
    public function login(User $user, $Type): bool
    {
        $this->db = new DBController;
        $this->db->connect();
        $email = $user->getEmail();
        $password = $user->GetPassword();
        if ($Type == "admin")
            $query = "select * from admin where user_name = 'gafar' and password = '123';";
        else
            $query = "select * from $Type where email = '$email' and password = '$password'";
        $result = $this->db->Select($query);
        if ($result === false) {
            echo "Error in Query";
            return false;
        } else {
            if (count($result) == 0) {
                session_start();
                $_SESSION["ErrorMessage"] = "You Have Entered Wrong Password and Email!!";
                $_SESSION["UserID"] = -1;
                return false;
            } else {
                session_start();
                $_SESSION["UserID"] = $result[0]["id"];
                $_SESSION["UserName"] = $result[0]["fname"] . " " . $result[0]["lname"];
                $_SESSION["LearningPath"] = $result[0]["learning_path_id"];
                $_SESSION["FinalRate"] = $result[0]["final_rate"];
                $_SESSION["Salary"] = $result[0]["salary"];
                $_SESSION["AdminName"] = $result[0]["user_name"];
                $_SESSION["UserEmail"] = $result[0]["email"];
                $_SESSION["UserFirstName"] = $result[0]["fname"];
                $_SESSION["UserLastName"] = $result[0]["lname"];
                $_SESSION["UserPassword"] = $result[0]["password"];
                $_SESSION["UserNationality"] = $result[0]["nationality"];
                $_SESSION["UserPhone"] = $result[0]["phone"];
                return true;
            }
        }

    }
    public function regester(User $user)
    {
        $this->db = new DBController;
        if ($this->db->connect()) {
            $UserId = $user->GetId();
            $fname = $user->getFirstName();
            $lname = $user->getLastName();
            $email = $user->getEmail();
            $password = $user->GetPassword();
            $query = "insert into user(fname,lname,email,password) VALUES ('$fname','$lname','$email','$password')";
            $result = $this->db->insert($query);
            if ($result != false) {
                session_start();
                $_SESSION["UserID"] = $result;
                $_SESSION["UserName"] = $result[0]["fname"] . " " . $result[0]["lname"];
                $_SESSION["UserEmail"] = $user->getEmail();
                $_SESSION["UserFirstName"] = $user->getFirstName();
                $_SESSION["UserLastName"] = $user->getLastName();
                $_SESSION["UserPassword"] = $user->GetPassword();
                $_SESSION["UserNationality"] = $user->Nationality();
                $_SESSION["UserPhone"] = $user->getPhoneNumber();
                $this->db->close();
                return true;
            } else {
                $_SESSION["ErrorMessage"] = "email is already exist";
                $this->db->close();
                return false;
            }
        } else {
            echo "error connection";
            return false;
        }
    }

}