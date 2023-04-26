<?php

class Question{
    private $question_id;
    private $question;
    private $answer1;
    private $answer2;
    private $answer3;
    private $answer4;
    private $correct_answer;

    // public function __construct($question_id,$question,$answer1,$answer2,$answer3,$answer4,$correct_answer){
    //     $this->question_id=$question_id;
    //     $this->question=$question;
    //     $this->answer1=$answer1;
    //     $this->answer2=$answer2;
    //     $this->answer3=$answer3;
    //     $this->answer4=$answer4;
    //     $this->correct_answer=$correct_answer;
    // }

    public function __construct($question_id){
        $this->question_id=$question_id;
    }

    public function getQuestion_id(){
        return $this->question_id;
    }

    public function getQuestion(){
        return $this->question;
    }

    public function getAnswer1(){
        return $this->answer1;
    }

    public function getAnswer2(){
        return $this->answer2;
    }

    public function getAnswer3(){
        return $this->answer3;
    }

    public function getAnswer4(){
        return $this->answer4;
    }

    public function getCorrectAnswers(){
        return $this->correct_answer;
    }
    public function setQuestion($question,$answer1,$answer2,$answer3,$answer4,$correct_answer){
        $this->question=$question;
        $this->answer1=$answer1;
        $this->answer2=$answer2;
        $this->answer3=$answer3;
        $this->answer4=$answer4;
        $this->correct_answer=$correct_answer;
    }
} 

?>