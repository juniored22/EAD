<?php

namespace View;


/**
*
*/
class ShowCategoryAdminView
{

  function __construct($result='')
  {
    require 'includes/menu.php';
    echo '<div class="area">';
    foreach ($result as $key ) {
      ?>
      <div class="item_010718">
        <span>ID: <?=$key['id_cat'];?></span>
        <span>Curso: <?=$key['name_cat'];?></span>
        <span>Status: <?=$key['status_cat'];?></span>
        <div class="action_010718">
          <a href="?codigo=<?=$key['id_cat'];?>&action=editar">EDITAR</a>
          <a href="?codigo=<?=$key['id_cat'];?>&action=deletar">APAGAR</a>
        </div>
      </div>
      <?php
    }
    echo '</div>';

  }
}

?>
