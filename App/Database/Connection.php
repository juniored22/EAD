<?php
namespace Database;
/**
*
*/
class Connection
{

    /**
    * The default PDO connection options.
    *
    * @var array
    */
    protected $options = array(
        \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_ORACLE_NULLS => \PDO::NULL_NATURAL,
        \PDO::ATTR_STRINGIFY_FETCHES => false,
        \PDO::ATTR_EMULATE_PREPARES => false,
    );

    protected $mysql = array();

    protected $config = array();

    public function __construct()
    {
        $this->config = require 'App/config/config.php';
        $this->mysql  = $this->config['connections']['mysql'];
    }

    /**
    * Create a new PDO connection.
    *
    * @param  string  $dsn
    * @param  array   $mysql
    * @param  array   $options
    * @return PDO
    */

    public function createConnection()
    {

        try {

            $dsn = "{$this->mysql['driver']}:host={$this->mysql['host']};dbname={$this->mysql['database']}";

            $username = $this->mysql['username'];

            $password = $this->mysql['password'];

            return new \PDO($dsn, $username, $password, $this->options);

        } catch (\Exception $erro) {

            return $erro->getMessage();
        }

    }

}
