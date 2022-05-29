<?php
include 'sessions.php';
require_login($logged_in);                  // Redirect user if not logged in
?>
<?php include 'header-member.php'; // Include new header file ?>

  <h1>Account</h1>
  A user account page goes here.

<?php include '../includes/footer.php'; ?>