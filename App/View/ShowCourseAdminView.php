<?php

namespace View;


/**
*
*/
class ShowCourseAdminView
{

  function __construct($result='')
  {
    require 'includes/menu.php';
    echo '<div class="area">';
    foreach ($result as $key ) {
      ?>
      <div class="item_010718">
        <span>Id: <?=$key['id_course'];?></span>
        <span>Curso: <?=$key['title_course'];?></span>
        <span>Status: <?=$key['status_course_ead'];?></span>
        <div class="action_010718">
          <a href="?codigo=<?=$key['id_course'];?>&action=editar">EDITAR</a>
          <a href="?codigo=<?=$key['id_course'];?>&action=deletar">APAGAR</a>
        </div>
      </div>
      <?php
    }
    echo '</div>';

  }
}

?>
