<?php

class Lecture {
    private $title;
    private $date;
    private $duration;
    private $speaker;

    public function __construct($title, $date, $duration, $speaker) {
        $this->title = $title;
        $this->date = $date;
        $this->duration = $duration;
        $this->speaker = $speaker;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDate() {
        return $this->date;
    }

    public function getDuration() {
        return $this->duration;
    }

    public function getSpeaker() {
        return $this->speaker;
    }
}
