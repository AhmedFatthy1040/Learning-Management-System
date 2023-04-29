<?php

namespace Controllers;

class ValidationController
{
    public function CheckForAdmin(): bool
    {
        session_start();
        if (!isset($_SESSION["userRole"])) {
            return false;
        }
        else {
            if ($_SESSION["userRole"] == "Admin") {
                return true;
            }
            else {
                return false;
            }
        }
    }
}