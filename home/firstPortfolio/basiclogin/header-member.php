<!DOCTYPE html>
<html>
  <head>
    <title>Chapter 9 Examples</title>
    <link href="css/styles.css" rel="stylesheet">
    <link href="../favicon.ico" rel="icon">
  </head>
  <body>
    <div class="page">
      <header>
        <a href="../index.php">Home</a>
      </header>
      <nav>
        <a href="account.php">My Account</a>
        <?= $logged_in ? '<a href="logout.php">Log Out</a>' : '<a href="login.php">Log In</a>'; ?>
      </nav>
      <section>