<?php

class User
{
    protected $id;

    protected $email;

    protected $password;

    protected $first_name;

    protected $last_name;

    protected $sex;

    protected $age;

    public function __construct($email, $password, $first_name, $last_name, $sex, $age)
    {
        $this->email = $email;
        $this->password = $password;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->sex = $sex;
        $this->age = $age;
    }

    static public function findByEmail($database, $email)
    {
        $result = $database->execute("SELECT * FROM users WHERE email='" . $email . "'");

        if ($result->num_rows !== 1) {
            return false;
        }

        $userData = $result->fetch_row();

        $user = new User($userData[1], $userData[2], $userData[3], $userData[4], $userData[5], $userData[6]);

        $user->id = $userData[0];

        return $user;
    }

    static public function countAllBySex($database, $sex)
    {
        $result = $database->execute("SELECT * FROM users WHERE sex='" . $sex . "'");

        return $result->num_rows;
    }

    static public function AvgAge($database)
    {
        $result = $database->execute("SELECT AVG(age) FROM users");

        $data = $result->fetch_row();

        return $data[0];
    }

    public function verifyPassowrd($password)
    {
        return $this->password === md5($this->id . $password);
    }

    public function save($database)
    {
        $user = $this->findByEmail($database, $this->email);

        if ($user !== false) {
            return false;
        }

        $result = $database->execute("SELECT MAX(id) FROM users");

        $userData = $result->fetch_row();

        $salt = $userData[0] + 1;

        $database->execute("INSERT INTO users (email, password, first_name, last_name, sex, age) VALUES (
            '" . $this->email . "',
            '" . md5($salt . $this->password) . "',
            '" . $this->first_name . "',
            '" . $this->last_name . "',
            '" . $this->sex . "',
            '" . $this->age . "'
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
