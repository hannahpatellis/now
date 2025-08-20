<?php

session_start();
if(!isset($_SESSION['active']) || $_SESSION['active'] != true) {
  header('Location: login.php?error=forbidden');
}

require_once(__DIR__ . "/../partials/header.php");

?>

<h1>Dashboard</h1>

<?php require_once(__DIR__ . "/../partials/footer.php"); ?>