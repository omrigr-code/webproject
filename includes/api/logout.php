<?php

session_start();

unset($_SESSION["email"]);

session_regenerate_id();

session_write_close();

header("Location: /includes/login.php", true, 302);
