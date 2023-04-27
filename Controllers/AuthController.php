<?php

namespace Controllers;


require_once("../../Learning-Management-System/Models/User.php");
require_once("DBController.php");

class AuthController
{
protected $db;

public function login(User $user): bool
{
    $db = new DBController;
    if ($db->connect()) {
        $query = "SELECT * FROM user WHERE email = '$user->getEmail()' and password = '$user->GetPassword()'";
        $result = $this->db->query($query);
        if (!$result) {
            echo "Error in Query!!";
            return false;
        }
        else {
            if (count($result) == 0) {
                echo "You Have Entered Wrong Password and Email!!";
                return false;
            }
            else
                return true;
        }
    }
    else {
        echo "Error in Database Connection!!";
        return false;
    }
}

}