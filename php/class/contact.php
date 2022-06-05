<?php

class Contact
{
    protected $id;

    protected $email;

    protected $full_name;

    protected $rsubjecteview;

    public function __construct($email, $full_name, $subject)
    {
        $this->email = $email;
        $this->full_name = $full_name;
        $this->subject = $subject;
    }

    public function save($database)
    {
        $database->execute("INSERT INTO contact (email, full_name, subject) VALUES (
            '" . $this->email . "',
            '" . $this->full_name . "',
            '" . $this->subject . "'
        );");

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
