<?php

class Database
{

    private $connection;

    public function __construct($db_host, $db_user, $db_pass, $db_name)
    {
        $this->_open_db_connection($db_host, $db_user, $db_pass, $db_name);
    }

    private function _open_db_connection($db_host, $db_user, $db_pass, $db_name)
    {
        $this->connection = new mysqli($db_host, $db_user, $db_pass, $db_name);

        if ($this->connection->connect_error) {
            $this->connection = null;
        }

        return $this;
    }

    public function execute($sql)
    {
        $result = $this->connection->query($sql);

        if (!$result) {
            return null;
        }

        return $result;
    }
}
