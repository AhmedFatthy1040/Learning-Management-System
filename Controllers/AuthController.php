<?php

namespace Controllers;


use User;

require_once(__DIR__ . "/../Models/User.php");
require_once(__DIR__ . "/DBController.php");

class AuthController
{
    protected $db;
    public function login(User $user)
    {
        $this->db = new DBController;
        $this->db->connect();
        $e = $user->getEmail();
        $p = $user->GetPassword();
        $query = "select * from user where email = '$e' and password = '$p'";
        $result = $this->db->query($query);
        if ($result === false) {
            echo "Error in Query";
            return false;
        }
        else {
            if (count($result) == 0) {
                session_start();
                $_SESSION["ErrorMessage"] = "You Have Entered Wrong Password and Email!!";
                return false;
            }
            else {
                session_start();
                $_SESSION["UserID"] = $result[0]["id"];
                $_SESSION["UserName"] = $result[0]["fname"] . " " . $result[0]["lname"];
                $_SESSION["LearningPath"] = $result[0]["learning_path_id"];
                $_SESSION["FinalRate"] = $result[0]["final_rate"];
                $_SESSION["Salary"] = $result[0]["salary"];

                return true;
            }
        }

    }

}