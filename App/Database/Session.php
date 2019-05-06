<?php
namespace Database;


/**
 *
 */
class Session
{
  function admin($data='')
  {
    if ($_SESSION['auth'] != "admin") {
      header('Location: /');
    }
  }

  function user($data='')
  {
    if ($_SESSION['auth'] != "user") {
      header('Location: /login');
    }
  }
}


 ?>
