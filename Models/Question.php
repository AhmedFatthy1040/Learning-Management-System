<?php

class Question{
    private $question_id;
    private $question;
    private $correct_answer;
    private $ExamID;

    public function Question($question,$correct_answer, $ExamID) {
        $this->question=$question;
        $this->correct_answer=$correct_answer;
        $this->ExamID = $ExamID;
    }

    public function GetQuestionID() {
        return $this->question_id;
    }
    public function SetQuestionID($question_id) {
        $this->question_id = $question_id;
    }
    public function GetExamID(){
        return $this->ExamID;
    }

    public function getQuestion(){
        return $this->question;
    }

    public function getCorrectAnswers(){
        return $this->correct_answer;
    }
} 

?>