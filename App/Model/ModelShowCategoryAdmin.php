<?php
namespace Model;

use Database\Schema;
/**
 *
 */
class ModelShowCategoryAdmin
{
  function list()
  {
    return (new Schema)->query('SELECT * FROM category;');
  }
}



 ?>
