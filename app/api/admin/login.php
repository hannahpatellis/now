<?php

session_start();
if(isset($_SESSION['active']) && $_SESSION['active'] == true) {
  header('Location: /go/dashboard.php');
}

// DB

if (password_verify($_POST['password'], $row[0]['PasswordHash'])) {
    $_SESSION['active'] = true;
    $_SESSION['user'] = $row[0]['Username'];
    header('Location: /go/dashboard.php');
} else {
  header('Location: /go/login.php?status=incorrect_login');
}

?>