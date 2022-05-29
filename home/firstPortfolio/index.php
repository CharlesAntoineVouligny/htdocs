<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="icon" href="favicon.ico">
</head>
<body>

    <h1>Portfolio</h1>

    <h2> Websites </h2>
    <ul>
        <li><a href="colorpicker/color.html">Color Picker</a></li>
        <li><a href="browserdata/data.php">Browsers Data</a></li>
        <li><a href="basiclogin/home.php">Basic Login</a></li>
        <li><a href="littleDatabase/littleDatabase.php">Little Database</a>
            <ul>
                <li><a href="littleDatabase/littleDatabase.php?id=1">First entry</a></li>
                <li><a href="littleDatabase/littleDatabase.php?id=2">Second entry (invalid)</a></li>
                <li><a href="littleDatabase/littleDatabase.php?id=3">Third entry</a></li>
            </ul>
        </li>
        <li><a href="bootstrap/bootstrap.php">Bootstrap</a></li>
    </ul>

    <a href="../phpbook/phpbook/index.php">PHP Book</a>

<?php include 'includes/footer.php' ; ?>