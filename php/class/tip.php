<?php

class Tip
{
    protected $id;

    protected $title;

    protected $description;

    protected $photo;

    protected $score;

    public function __construct($title, $description, $photo, $score)
    {
        $this->title = $title;
        $this->description = $description;
        $this->photo = $photo;
        $this->score = $score;
    }

    static public function GetAllTips($database)
    {
        $tips = [];

        $result = $database->execute("SELECT * FROM tips");

        if ($result->num_rows < 1) {
            return false;
        }

        for ($i = 0; $i < $result->num_rows; $i++) {
            $tipData = $result->fetch_row();

            $tip = new Tip($tipData[1], $tipData[2], $tipData[3], $tipData[4]);

            $tip->id = $tipData[0];

            $tips[] = $tip;
        }

        return $tips;
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
