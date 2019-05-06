<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="theme/css/main.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
<title></title>
</head>
<body>
<div class="hedear_top">
<!-- <span class="fab fa-mailchimp"> teste@teste.com</span> -->
<?php if (@$_SESSION['auth'] == 'user'): ?>
  <span>
    <i class="fas fa-user-circle"></i> <?=$_SESSION['name'];?>
    <i class="fas fa-book" style="margin: 0px 0px 0px 20px;"></i>
    <a href="#" style="color:#ffffff;">meus cursos</a>
    <i class="fas fa-medal" style="margin: 0px 0px 0px 20px;"></i>
    <a href="#" style="color:#ffffff;">notas</a>
</span>

<?php endif; ?>

</div>
  <div class="menu">
    <a href="/"><img class="logo" src="theme/src/logo.png" alt=""></a>

    <ul class="m010718 mobile">
      <li><a href="/">HOME</a></li>
      <li><a href="/cursos?id=all">COURSES</a></li>
      <li><a href="#">ABOUT</a></li>
    </ul>
    <div class="div_custon">
      <input class="search"type="text" name="" value="" placeholder="SEARCH">
    <?php if (@$_SESSION['auth']=='user'): ?>
      <a class="btn_enter" href="/logout">SAIR</a>
    <?php endif; ?>
    <?php if (@$_SESSION['auth']!='user'): ?>
      <a class="btn_enter" href="/login">ENTER</a>
    <?php endif; ?>

      <a class="btn_enter ico_menu_mobile action_menu" href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
    </div>

  </div>
