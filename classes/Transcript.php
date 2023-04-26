<?php

class Transcript {
    private $studentName;
    private $courses = array();

    public function __construct($studentName) {
        $this->studentName = $studentName;
    }

    public function getStudentName() {
        return $this->studentName;
    }

    public function addCourse($course, $grade) {
        $this->courses[$course] = $grade;
    }

    public function getCourses() {
        return $this->courses;
    }

    public function getGPA() {
        $totalCredits = 0;
        $totalPoints = 0;

        foreach ($this->courses as $grade) {
            $credits = $grade['credits'];
            $letterGrade = $grade['grade'];

            switch ($letterGrade) {
                case 'A':
                    $points = 4.0;
                    break;
                case 'B':
                    $points = 3.0;
                    break;
                case 'C':
                    $points = 2.0;
                    break;
                case 'D':
                    $points = 1.0;
                    break;
                default:
                    $points = 0.0;
                    break;
            }

            $totalCredits += $credits;
            $totalPoints += ($credits * $points);
        }

        if ($totalCredits > 0) {
            return number_format(($totalPoints / $totalCredits), 2);
        } else {
            return 0;
        }
    }
}
