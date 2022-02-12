<?php 

    session_start();

    include('./database.php');

    if(isset($_POST['reg_user'])) {
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        $tel = mysqli_real_escape_string($db, $_POST['tel']);
        $address = mysqli_real_escape_string($db, $_POST['address']);

        $sql = "INSERT INTO profile (name, username, email, password, tel, address) VALUES ('$name', '$username', '$email', '$password', '$tel', '$address')";
        mysqli_query($db, $sql);

        $_SESSION['name'] = $name;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['tel'] = $tel;
        $_SESSION['address'] = $address;

        header('location: ../home.php');
    }

?>