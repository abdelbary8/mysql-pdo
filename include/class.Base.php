<?php

require 'include/db.php';

class Base
{
   public $dbh;

   function __construct() {
       global $dbh;
       $this->dbh = dbhandler();
   }
}

?>