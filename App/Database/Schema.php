<?php
namespace Database;

use Database\Connection;

/**
*
*/
class Schema
{

  /**
  * Run a query SQL.
  *
  * @param  string  $table
  * @return array
  */

  public function query($query)
  {

    try {

      $connection = (new Connection)->createConnection();
      $result = $connection->query($query);

      return $result->fetchAll(\PDO::FETCH_ASSOC);

    } catch (\Exception $erro) {

      return $erro->getMessage();

    }

  }

}
