<?php

/*
|--------------------------------------------------------------------------
| Auto carregamento
|--------------------------------------------------------------------------
|
| arquivo de autoload criado na mão não segue o padrão
| feito para estudo
|
*/

spl_autoload_register(function($name_class)
{
  $name_class = dirname(__FILE__).'/'. str_replace('\\','/',$name_class).'.php';

  if(!file_exists($name_class))
  {
    echo "Error Folder or file no exists '{$name_class}'";
  }

  require_once($name_class);
});
