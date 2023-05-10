<?php

class Question{
    private $question_id;
    private $question;
    private $correct_answer;
    private $ExamID;

    public function Question() {

    }
    public function SetQuestion($question) {
        $this->question=$question;
    }
    public function SetExamID($ExamID) {
        $this->ExamID = $ExamID;
    }
    public function SetCorrectAnswer($correct_answer) {
        $this->correct_answer = $correct_answer;
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