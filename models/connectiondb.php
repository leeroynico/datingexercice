<?php 
try
  {
    $dbname = '../DB/madatabase.db';
    $pdo = new PDO (("sqlite:$dbname"));
    $pdo-> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch(PDOException $e)
    {
      echo 'ça a foiré :' . $e->getMessage();
    }

    