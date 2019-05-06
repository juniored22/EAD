<?php

namespace View;

/**
*
*/
class LoginView
{

  function __construct()
  {
    ?>
    <style>

    .wrapper {
      margin-top: 80px;
      margin-bottom: 80px;
    }

    .form-signin {
      max-width: 380px;
      padding: 15px 35px 45px;
      margin: 0 auto;
      background-color: #fff;
      border: 1px solid rgba(0,0,0,0.1);
    }

    .form-signin-heading,
    .checkbox {
      margin-bottom: 30px;
    }

    .checkbox {
      font-weight: normal;
    }

    .form-control {
      position: relative;
      font-size: 16px;
      height: auto;
      padding: 10px;
      z-index: 2;
    }


    input[type="text"] {
      margin-bottom: -1px;
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
    }

    input[type="password"] {
      margin-bottom: 20px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
    input[name="username"],   input[name="password"]{
      width: 100%;
      height: 40px;
      margin: 10px 0;
    }

    .envia_010718{
      background: green;
      color: #ffffff;
      font-size: 20px;
      padding: 9px;
      width: 100%;
      display: block;
      border: solid 0;
      border-radius: 3px;
      font-weight: 900;
      cursor: pointer;
    }

body {
	background: #eee !important;
}
    </style>

    <div class="wrapper">
      <form action="" method="post" class="form-signin">
        <h2 class="form-signin-heading">Please login</h2>
        <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
        <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
        <button type="submit" class="btn btn-success envia_010718">LOGIN</button>
        <label class="checkbox">
          <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
        </label>
      </form>
    </div>

    <?php

  }
}



?>
