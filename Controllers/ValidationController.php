<?php

namespace Controllers;

class ValidationController
{
    public function CheckForAdmin(): bool
    {
        session_start();
        if (!isset($_SESSION["userID"])) {
            return false;
        }
        else {
            if ($_SESSION["userID"]  <= "1000") {
                return true;
            }
            else {
                return false;
            }
        }
    }
}