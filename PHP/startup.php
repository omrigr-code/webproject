<?php

require_once "config.php";
require_once "class/database.php";

$database = new Database($env["db_host"], $env["db_user"], $env["db_pass"], $env["db_name"]);
