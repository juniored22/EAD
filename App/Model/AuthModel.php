<?php
namespace Model;

use Database\Schema;
/**
 *
 */
class AuthModel
{

  function admin($data='')
  {
    $email = $data['username'];
    $password = $data['password'];

    $result = (new Schema)->query("SELECT * FROM user_ead WHERE email_user='{$email}' AND password_user='{$password}' AND nivel_user = 'admin';");
    return $result;
  }

  function user($data='')
  {
    $email = $data['username'];
    $password = $data['password'];

    $result = (new Schema)->query("SELECT * FROM user_ead WHERE name_user='{$email}' AND password_user='{$password}' AND nivel_user = 'user';");
    return $result;
  }
}


 ?>
