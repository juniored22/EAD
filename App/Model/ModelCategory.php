<?php
namespace Model;

use Database\Schema;

/**
 *
 */
class ModelCategory
{

  function __construct()
  {
    // code...
  }

  public function createCategory($data='',$file)
  {
    return (new Schema)->query("INSERT INTO category (name_cat, img_cat, description_cat, status_cat) VALUES ('{$data['title']}', '{$file}', '{$data['description']}', '{$data['status']}');");
  }

  public function deleteCategory($data='')
  {
    return (new Schema)->query("DELETE FROM category WHERE id_cat='{$data}';");
  }

  public function selectCategory($data='')
  {
    return (new Schema)->query("SELECT * FROM category WHERE id_cat='{$data}';");
  }
}




 ?>
