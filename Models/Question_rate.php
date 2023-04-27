<?php
    class Question_Rate{
        private $question;
        private $mentor_id;
        
        public function __construct($mentor_id){
            $this->mentor_id=$mentor_id;
        }

        public function getQuestions(){
            return $this->question;
        }

        public function getMentor_id(){
            return $this->mentor_id;
        }

        public function setQuestion($question){
            $this->question=$question;
        }
    }
?>