<?php 

    session_start();

    include('./database.php');

    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        $query = "SELECT * FROM profile WHERE username = '$username' AND password = '$password' ";
        $result = mysqli_query($db, $query);

        if(mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;

            header('location: ../home.php');
        } else {
            header('location: ../login.php');
        }
    
    }

?>