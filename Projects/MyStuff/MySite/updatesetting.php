<?php

session_start();

if (isset($_GET)) {
    foreach(array_keys($_GET) as $key) {
        $_SESSION[$key] = $_GET[$key];
    }
}

header("Location: ./settings.php?settings=updated");