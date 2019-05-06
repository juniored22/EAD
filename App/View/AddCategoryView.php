<?php
namespace View;

/**
 *
 */
class AddCategoryView
{

  function __construct()
  {
    require 'includes/menu.php';

?>


<style media="screen">
.form_010718{
  width: 300px;
  display: flex;
  flex-direction: column;
  margin: 0 auto;
  padding: 13px;
}

.form_010718 input, .form_010718 select{
  padding: 9px;
  border-radius: 6px;
  border: solid 1px #000000;
  font-weight: 900;
  margin: 9px 0;
}

.form_010718 textarea{
  width: 100%;
  border: solid 1px #000000;
  border-radius: 4px;
}

.btn_save{
  background: #4CAF50;
  color: #ffffff;
  font-weight: 900;
  border-radius: 4px;
  border: solid 0;
  margin: 13px 0;
  padding: 13px;
}
#exampleFormControlTextarea7{

margin: 10px 0;
}

</style>
<div class="area">
<h1>CATEGORY</h1>
    <form class="form_010718" action="" method="post" enctype="multipart/form-data">
      <input type="text" name="title" value="" placeholder="Titulo">
      <input type="file" name="img" value="" placeholder="Link do video">
      <select class="" name="status">
        <option value="novo">NOVO</option>
        <option value="ativo">ATIVO</option>
        <option value="desativo">DESATIVADO</option>
      </select>
      <div class="form-group shadow-textarea">
        <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" name="description" placeholder="Description..."></textarea>
      </div>
      <button type="submit" class="btn btn-primary btn_save" name="button" value="save">SALVAR</button>
    </form>
</div>


<?php
  }
}


 ?>
