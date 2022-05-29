<?php
include 'sessions.php';
logout();                             // Call logout() to terminate session
header('Location: home.php');         // Redirect to home page