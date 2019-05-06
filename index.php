<?php
session_start();

/**
 * Loja - A PHP Framework For Web Artisans
 *
 * @package  Tesserato
 * @author   Edgard <tesserato.csi@gmail.com>
 */

 /*
 |--------------------------------------------------------------------------
 | Run The Application
 |--------------------------------------------------------------------------
 |
 | Arquivo de execução do sistema carregamento das chamadas das class é
 | função do arquivo autoload.php,  segudo da chamada do arquivo de functions
 | usado para as função de carregamento de menu links do banner ajuda a renderiza
 | a view da home, conf é o aequivo proncipal ele carega as variáveis do sistema
 |
 */
require_once 'App/autoload.php';
require_once 'App/config/config.php';

/*
|--------------------------------------------------------------------------
| Controller Application
|--------------------------------------------------------------------------
|
| Abaixo segue arquivo de controle de class
| seguido pelo arquivo de sessão autenticando os acessos
| e chamando arquivos de rotas responsavel pelo caminho existentes do sistem
*/
$controller = new Controller\Controller();
// $session    = new Model\Session();
// $session->set('userLogin', null);
$route = require_once 'App/routes/web.php';
$controller->$route();

// TODO: receber os valores pelo arquivo .env



// CALLBACK
function teste()
{
  return false;
}

function run($value='', $func)
{
  if ($func) {
    // echo $value;
  }
  if (!$func) {
    // echo "erro";
  }
}

run('bosta',teste());
