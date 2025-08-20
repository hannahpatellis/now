<?php

session_start();
if(isset($_SESSION['active']) && $_SESSION['active'] == true) {
  header('Location: /go/dashboard.php');
}

require_once(__DIR__ . "/../partials/header.php"); 

?>

<h1>Login page</h1>

<?php require_once(__DIR__ . "/../partials/footer.php"); ?>