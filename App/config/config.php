<?php
error_reporting(-1);
ini_set('display_errors', 'Off');

define('PATH_DIR', dirname(__DIR__));
define('URL_THEME', dirname(__DIR__,2)."/theme");

return array(

    /*  settings  */
    'connections' => array(

        'mysql' => array(
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'db_ead',
            'username'  => 'db_user',
            'password'  => 'xxxxxxxxx',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'options'   => array(
                \PDO::ATTR_PERSISTENT => true,
            ),
        ),
        /*  */
    )
);


 ?>
