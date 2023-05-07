<?php

class Lecture {
    private $Name;
    private $Week;
    private $Course_ID;
    private $Info;
    private $Link;
    private $Slide;
    private $Video;

    public function __construct() {
    }

    public function setName($Name){
        $this->Name = $Name;
    }

    public function setLink($Link){
        $this->Link = $Link;
    }

    public function setWeek($Week){
        $this->Week = $Week;
    }

    public function setCourse_ID($Course_ID){
        $this->Course_ID = $Course_ID;
    }

    public function setInfo($Info){
        $this->Info = $Info;
    }

    public function setSlide($Slide){
        $this->Slide = $Slide;
    }

    public function setVideo($Video){
        $this->Video = $Video;
    }

    public function getName() {
        return $this->Name;
    }

    public function getWeek() {
        return $this->Week;
    }

    public function getCourse_ID() {
        return $this->Course_ID;
    }

    public function getInfo() {
        return $this->Info;
    }

    public function getLink() {
        return $this->Link;
    }

    public function getSlide() {
        return $this->Slide;
    }

    public function getVideo() {
        return $this->Video;
    }

}
