<?php
namespace Model;
/**
*
*/
class ModelUpload
{

  function __construct($array)
  {
    $_FILES = $array;
    $uploaddir = URL_THEME.'/src/uploads/';
    $uploadfile = $uploaddir . basename($_FILES['img']['name']);

    if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
      return "Arquivo válido e enviado com sucesso.";
    } else {
      return "Possível ataque de upload de arquivo!";
    }
  }
}

?>
