<?php


if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('Location: /esercizioS2_L1/login.php');
    exit;
}
