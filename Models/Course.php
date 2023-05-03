<?php

class Course {
    private $name;
    private $ID;
    private $description;
    private $requirements;
    private $mentor_id;
    private $learning_path_id;
    private $students = array();

    public function __construct() {

    }
    public function SetName($name) {
        $this->name = $name;
    }

    public function GetName() {
        return $this->name;
    }
    public function SetID($ID) {
        $this->name = $ID;
    }
    public function GetID() {
        return $this->ID;
    }
    public function SetMntorID($mentor_id) {
        $this->mentor_id = $mentor_id;
    }
    public function GetMentorID() {
        return $this->mentor_id;
    }
    public function SetLearningPathID($learning_path_id) {
        $this->learning_path_id = $learning_path_id;
    }
    public function GetLearningPathID() {
        return $this->learning_path_id;
    }
    public function SetRequirements($requirements) {
        $this->requirements = $requirements;
    }
    public function GetRequirements() {
        return $this->requirements;
    }
    public function SetDescription($description) {
        $this->description = $description;
    }
    public function GetDescription() {
        return $this->description;
    }
    public function addStudent($student) {
        $this->students[] = $student;
    }

    public function getStudents() {
        return $this->students;
    }
}
