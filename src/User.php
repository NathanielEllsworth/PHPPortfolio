<?php

class User {

    private $searchTopic;

    public $startYear;

    private $endYear;

    private $imageUrl;

    // Why does $last have to come . . . Well, last?
    public function __construct ($topic, $start, $end = "") {
        $this->searchTopic = $topic;
        $this->startYear = $start;
        $this->endYear = $end;

    }

    public function setImageUrl ($imageUrl) {
        $this->imageUrl = $imageUrl;
    }

    public function getFullYearSpan() {
        return $this->startYear . " " . $this->endYear;
    }
}
