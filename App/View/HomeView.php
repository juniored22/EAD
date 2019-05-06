<?php
namespace View;
/**
*
*/
class HomeView
{

  function __construct($data='')
  {
    require URL_THEME.'/includes/header.php';
    require URL_THEME.'/includes/banner.php';
    // print_r($data);
    ?>

      <h2 style="text-align:center">Por onde você quer começar?</h2>
      <span style="text-align:center;width:100%;display:block">Escolha o curso que vai ajudar você a alavancar sua carreira</span>
      <!-- <h1 class="title_010718">courses</h1> -->

    <div class="cards" >


      <?php
        $i = 0;
        foreach ($data as $key) {
      ?>
      <a class="card" href="/cursos?id=<?=$key['id_cat'];?>">
        <img src="/theme/src/uploads/<?=$key['img_cat'];?>" alt="">
        <?php  if($key['status_cat'] == 'novo') { ?>
        <span class="status">NOVO</span>
        <?php } ?>
        <div class="">
          <h2><?=$key['name_cat'];?></h2>
          <p><?=substr($key['description_cat'],0,100);?> ...</p>
        </div>
      </a>
      <?php

      if (++$i == 4) break;
    }
    ?>
    </div>

    <?php
    require URL_THEME.'/includes/footer.php';
  }
}
?>
