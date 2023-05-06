<?php

namespace Controllers;

class ValidationController
{
    public function CheckForAdmin(): bool
    {
        session_start();
        if (!isset($_SESSION["UserID"])) {
            return false;
        }
        else {
            if ($_SESSION["UserID"]  < 1000) {
                return true;
            }
            else {
                return false;
            }
        }
    }
    public function CheckForMentor(): bool
    {
        session_start();
        if (!isset($_SESSION["UserID"])) {
            return false;
        }
        else {
            if ($_SESSION["UserID"]  >= 1000 && $_SESSION["UserID"] <= 2000) {
                return true;
            }
            else {
                return false;
            }
        }
    }
}