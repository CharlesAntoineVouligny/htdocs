<?php header("Content-type: text/css");
session_start();
$pageInfo = $_SESSION['pageInfo'];
?>

  .navbar-brand, #brandIcon {
    vertical-align: center;
    margin-bottom: 5px;
    display: inline-block;
    opacity: <?= $value = ($pageInfo['id'] == 0) ? 1 : 0.5 ?>; 
  }


