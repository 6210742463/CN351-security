<?php 

    session_start();

    include('./database.php');

    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        $query = "SELECT * FROM profile WHERE username = '$username' AND password = '$password' ";
        $result = mysqli_query($db, $query);

        $row = mysqli_fetch_assoc($result);


        if(mysqli_num_rows($result) == 1) {

            $_SESSION['name'] = $row['name'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['tel'] = $row['tel'];
            $_SESSION['address'] = $row['address'];

            header('location: ../home.php');
        } else {
            header('location: ../login.php');
        }
    
    }

?>