<?php
/*
*User: Francisco Paz
*Date: 13/10/2016
*Time: 4:43 PM
*/

class Connection{


 static function connect(){
     $us="root";
     $pasw="E3M2BrkCAUdX";
    try {
      $cn = new PDO('mysql:host='.HOST.';dbname=hondurines',$us,$pasw);
      return $cn;
    } catch (PDOException $ex) {
      $ex->getMessage();
    }
  }
}



 ?>
