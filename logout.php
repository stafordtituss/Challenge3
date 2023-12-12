<?php
session_start();
session_destroy();
if (isset($_COOKIE['admin'])) {
    unset($_COOKIE['admin']); 
    setcookie('admin', '', -1, '/'); 
    header('Location: index.html');
} else {
    header('Location: index.html');
}
// Redirect to the login page:
header('Location: index.html');
?>
