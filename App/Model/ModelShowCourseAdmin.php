<?php
namespace Model;

use Database\Schema;
/**
 *
 */
class ModelShowCourseAdmin
{
  function list($data='')
  {
    if ($data == 'all') {
      return (new Schema)->query("SELECT * FROM course_ead;");
    }
    return (new Schema)->query("SELECT * FROM course_ead WHERE category_id = '{$data}';");

  }
}



 ?>
