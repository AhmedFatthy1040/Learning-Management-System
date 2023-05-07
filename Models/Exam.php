<?php
    class Exam extends Course{
        private $exam_id;
        private $exam_duration;
        private $course_id;

        public function setExamDuration($exam_duration){
            $this->exam_duration=$exam_duration;
        }

        public function getExamDuration(){
            return $this->exam_duration;
        }

        public function setCourseID($course_id){
            $this->course_id=$course_id;
        }

        public function getCourseID(){
            return $this->course_id;
        }

        public function getExamID(){
            return $this->exam_id;
        }
    }
?>