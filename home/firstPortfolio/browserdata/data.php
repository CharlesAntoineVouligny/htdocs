<?php
$cities  = [
    'London' => '48 Store Street, WC1E 7BS',
    'Sydney' => '151 Oxford Street, 2021',
    'NYC'    => '1242 7th Street, 10492',
    'Montreal'    => '2976 rue Ontario, J4K 7U9',
];
$city = $_GET['city'] ?? "";
$valid = array_key_exists($city, $cities);
if ($valid) {
    $address = $cities[$city];
} else {
    $address = 'Please select a city';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="icon" href="../favicon.ico">
</head>
<body>

<?php foreach ($cities as $key => $value) { ?>
  <a href="data.php?city=<?= $key ?>"> <?= $key ?></a>
<?php } ?>

<h1><?= $city ?></h1>
<p><?= $address ?></p>

<form action="data.php" method="POST">
  <p>Name:     <input type="text" name="name"></p>
  <p>Age:      <input type="text" name="age"></p>
  <p>Email:    <input type="text" name="email"></p>
  <p>Password: <input type="password" name="pwd"></p>
  <p>Bio:      <textarea name="bio"></textarea></p>
  <p>Contact preference:
    <select name="preferences">
      <option value="email">Email</option>
      <option value="phone">Phone</option>
    </select></p>
  <p>Rating: 
    1 <input type="radio" name="rating" value="1">
    2 <input type="radio" name="rating" value="2">
    3 <input type="radio" name="rating" value="3"></p>
  <p><input type="checkbox" name="terms" value="true"> 
  I agree to the terms and conditions.</p>
  <p><input type="submit" value="Save"></p>
</form>

<a href="../index.php">Home</a>

<?php include '../includes/footer.php' ?>