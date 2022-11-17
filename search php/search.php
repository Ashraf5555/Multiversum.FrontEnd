<?php
  const DBHOST = 'localhost';        // Database Hostname
  const DBUSER = 'root';             // MySQL Username
  const DBPASS = '';                 // MySQL Password
  const DBNAME = 'school';  // MySQL Database name
 
  // Data Source Network
  $dsn = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME . '';
 
  // Connection Variable
  $conn = null;

  var_dump($_POST);
 
  // Connect Using PDO (PHP Data Output)
  try {
    $conn = new PDO($dsn, DBUSER, DBPASS);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    die('Error : ' . $e->getMessage());
  }
 
  if (isset($_POST['search'])) {
    $inpText = $_POST['search'];
    $sql = 'SELECT * FROM persons WHERE firstname LIKE :search OR lastname LIKE :search'  ;
    $stmt = $conn->prepare($sql);
    $stmt->execute(['search' => '%' . $inpText . '%']);
    $result = $stmt->fetchAll();
 
    if ($result) {
      foreach ($result as $row) {
        echo '<a href="#" class="list-group-item list-group-item-action border-1">' . $row['firstname'] . '</a>';
      }
    } else {
      echo '<p class="list-group-item border-1">No Record</p>';
    }
  }
?>