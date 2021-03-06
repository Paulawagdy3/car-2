<?php
  // (A) DATABASE CONFIG - CHANGE TO YOUR OWN!
    define('DB_HOST', 'localhost:3307');
    define('DB_NAME', 'cardatabase');
    define('DB_CHARSET', 'utf8');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');

  // (B) CONNECT TO DATABASE
  try 
  {
    $pdo = new PDO(
      "mysql:host=".DB_HOST.";
      charset=".DB_CHARSET.";
      dbname=".DB_NAME,
      DB_USER, DB_PASSWORD, 
      [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ]
    );
  } 
    catch (Exception $ex) 
  { 
    exit($ex->getMessage()); 
  }

  // (C) SEARCH
  $stmt = $pdo->prepare
  ("SELECT * FROM `prand` WHERE `prand_name` LIKE ? or`prand_image` LIKE ?");

  $stmt->execute
  (["%".$_POST['search']."%", "%".$_POST['search']."%"]);

  $results = $stmt->fetchAll();
    if (isset($_POST['ajax'])) 
    { 
      echo json_encode($results); 
    }
?>