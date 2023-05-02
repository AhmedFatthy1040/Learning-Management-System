<?php

namespace Controllers;

class ValidationController
{
    public function CheckForAdmin(): bool
    {
        session_start();
        if (!isset($_SESSION["id"])) {
            return false;
        }
        else {
            if ($_SESSION["userRole"]  < "1000") {
                return true;
            }
            else {
                return false;
            }
        }
    }
}