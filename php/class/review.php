<?php

class Review
{
    protected $id;

    protected $tip_id;

    protected $score;

    protected $review;

    public function __construct($tip_id, $score, $review)
    {
        $this->tip_id = $tip_id;
        $this->score = $score;
        $this->review = $review;
    }

    static public function GetAllReviews($database)
    {
        $tips = [];

        $result = $database->execute("SELECT * FROM reviews");

        if ($result->num_rows < 1) {
            return false;
        }

        for ($i = 0; $i < $result->num_rows; $i++) {
            $tipData = $result->fetch_row();

            $tip = new Review($tipData[1], $tipData[2], $tipData[3]);

            $tip->id = $tipData[0];

            $tips[] = $tip;
        }

        return $tips;
    }

    public function save($database)
    {
        $database->execute("INSERT INTO reviews (tip_id, score, review) VALUES (
            '" . $this->tip_id . "',
            '" . $this->score . "',
            '" . $this->review . "'
        );");

        $result = $database->execute("SELECT score FROM reviews");

        $total = 0;

        for ($i = 0; $i < $result->num_rows; $i++) {
            $total += $result->fetch_row()[0];
        }

        $finel_score = ($total / $result->num_rows);

        var_dump($finel_score);

        $database->execute("UPDATE tips SET score='" . $finel_score . "' WHERE id=" . $this->tip_id . ";");

        return true;
    }

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
}
