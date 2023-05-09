<?php
    require_once(__DIR__ . "/./../Models/Lecture.php");
    class Assignment extends Lecture{
        private $deadline;
        private $sheet;
        private $lecture_id;

        public function setDeadline($deadline){
            $this->deadline =$deadline;
        }

        public function setSheet($sheet){
            $this->sheet =$sheet;
        }

        public function setLectureID($lecture_id){
            $this->lecture_id = $lecture_id;
        }

        public function getSheet(){
            return $this->sheet;
        }

        public function getDeadline(){
            return $this->sheet;
        }

        public function getLectureID(){
            return $this->lecture_id;
        }
    }
?>