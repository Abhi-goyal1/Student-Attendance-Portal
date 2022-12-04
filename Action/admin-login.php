<?php
if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if ($email == 'admin@example.com' && $pass == 'admin@sms') {
        $_SESSION['signin'] = true;
        header('Location:../Admin-dash.php');
    } else {
        echo 'Invalid Credentials';
    }
}
?>