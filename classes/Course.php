<?php

class Course {
    private $name;
    private $code;
    private $instructor;
    private $students = array();

    public function __construct($name, $code, $instructor) {
        $this->name = $name;
        $this->code = $code;
        $this->instructor = $instructor;
    }

    public function getName() {
        return $this->name;
    }

    public function getCode() {
        return $this->code;
    }

    public function getInstructor() {
        return $this->instructor;
    }

    public function addStudent($student) {
        $this->students[] = $student;
    }

    public function getStudents() {
        return $this->students;
    }
}
