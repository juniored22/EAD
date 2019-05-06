<?php
namespace View;
/**
*
*/
class ListCursoView
{

  function __construct($data='')
  {
    require URL_THEME.'/includes/header.php';
    ?>

    <h1 class="title_050419">courses</h1>
    <div class="uncode-divider-wrap uncode-divider-wrap-bottom z_index_0 uncode-row-divider-invert gradiente" style="position:relative;;height:400px;background: radial-gradient(circle at left top,rgb(70, 154, 168) 9%,rgb(129, 62, 179) 48%,rgb(100,66,255) 91%);" data-height="108" data-unit="px">
      <svg version="1.1" class="uncode-row-divider uncode-row-divider-curve" x="0px" y="0px" width="100%" height="100px" viewBox="0 0 240 24" enable-background="new 0 0 240 24" xml:space="preserve" preserveAspectRatio="none" style="transform: translatex(0) scaley(-1);">
        <path fill="#ffffff" fill-opacity="0.33" d="M240,24V0H0v24C0,24,47.861,5.107,119.849,5.107C191.855,5.107,240,24,240,24z">
        </path>
        <path fill="#ffffff" fill-opacity="0.33" d="M119.829,2.661c55.562,0,98.521,9.957,120.171,16.271V0H0v18.902 C21.582,12.598,64.37,2.65,119.829,2.661z"></path> <path fill="#ffffff" d="M119.81,0.117c50.737,0,92.456,6.89,120.19,13.271V0H0v13.34C27.651,6.979,69.17,0.117,119.81,0.117z"></path>
      </svg>
    </div>


    <div class="cards_absolut">


      <?php
      foreach ($data as $key) {
        $img = explode('?v=',$key['move_course']);
        ?>
        <a class="card" href="/curso?id=<?=$key['id_course'];?>">
          <img src="https://i.ytimg.com/vi/<?=$img[1];?>/hqdefault.jpg" alt="">
          <?php  if($key['status_course_ead'] == 'novo') { ?>
            <span class="status">NOVO</span>
          <?php } ?>
          <div class="">
            <h2><?=$key['title_course'];?></h2>
            <p><?=substr($key['description_course'],0,100);?></p>
          </div>
        </a>
        <?php
      }
      ?>
    </div>

    <?php
    require URL_THEME.'/includes/footer.php';
  }
}


?>
