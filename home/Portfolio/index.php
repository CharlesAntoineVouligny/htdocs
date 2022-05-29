<?php
session_start();
// set_include_path("C:/xampp/htdocs/home/Portfolio/");
require 'queries/connectToDB.php';
include 'functions/functions.php';

setIndex();
$pageInfo = getPageInfo();
$_SESSION['pageInfo'] = $pageInfo;
?>

<?php
include 'includes/header.php';
include 'queries/navigationQuery.php';
include 'navigation/navbar.php';
include('pages/' . $pageInfo["root"] . '/' . $pageInfo["name"] . '.php'); 

include 'includes/footer.php';
$conn->close();

?>