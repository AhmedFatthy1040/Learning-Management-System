<?php

class Message {
    private $sender;
    private $recipient;
    private $content;
    private $timestamp;

    public function __construct($sender, $recipient, $content) {
        $this->sender = $sender;
        $this->recipient = $recipient;
        $this->content = $content;
        $this->timestamp = time();
    }

    public function getSender() {
        return $this->sender;
    }

    public function getRecipient() {
        return $this->recipient;
    }

    public function getContent() {
        return $this->content;
    }

    public function getTimestamp() {
        return $this->timestamp;
    }
}
