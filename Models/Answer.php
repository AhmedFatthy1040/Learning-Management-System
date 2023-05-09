<?php

class Answer
{
    private $Answer;
    private $QuestionID;

    public function Answer() {

    }
    public function SetAnswer($Answer) {
        $this->Answer = $Answer;
    }
    public function SetQuestionID($QuestionID) {
        $this->QuestionID = $QuestionID;
    }
    public function GetAnswer()
    {
        return $this->Answer;
    }
    public function GetQuestionID()
    {
        return $this->QuestionID;
    }
}