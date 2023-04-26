<?php

class Grade {
    private $letterGrade;
    private $numericGrade;

    public function __construct($letterGrade, $numericGrade) {
        $this->letterGrade = $letterGrade;
        $this->numericGrade = $numericGrade;
    }

    public function getLetterGrade() {
        return $this->letterGrade;
    }

    public function getNumericGrade() {
        return $this->numericGrade;
    }
}
