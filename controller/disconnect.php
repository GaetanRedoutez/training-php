<?php
function disconnect()
{
  session_start();

  if (session_status() === PHP_SESSION_ACTIVE) {
    $_SESSION = array();

    session_unset();
    session_destroy();
  }

  header('location: index.php');
  exit();
}
