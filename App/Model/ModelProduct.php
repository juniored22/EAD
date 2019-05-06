<?php
namespace Model;

use Database\Schema;

/**
 *
 */
class ModelProduct
{

  function __construct()
  {
    // code...
  }

  public function createCourse($data='')
  {
    return (new Schema)->query("INSERT INTO course_ead (title_course, move_course, description_course, status_course_ead, question_course, category_id) VALUES ('{$data['title']}','{$data['link']}', '{$data['description']}', '{$data['status']}','{$data['question']}', '{$data['id_category']}');");
  }

  public function deleteCourse($data='')
  {
    return (new Schema)->query("DELETE FROM course_ead WHERE id_course='{$data}';");
  }

  public function selectCourse($data='')
  {
    return (new Schema)->query("SELECT * FROM course_ead WHERE id_course='{$data}';");
  }
}




 ?>
