<?php include('./config/database.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <style>
       @import url('https://fonts.googleapis.com/css?family=Josefin+Sans');

      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        font-family: 'Josefin Sans', sans-serif;
      }

      body{
        background-image: url('https://media.discordapp.net/attachments/938457605955809331/940258322081271869/bg.png?width=1376&height=670');
      }

      .frame{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        max-width: 350px;
        width: 100%;
        background: #fff;
        padding: 25px;
        border-radius: 5px;
        box-shadow: 4px 4px 2px rgba(254,236,164,1); 
      }

      .frame h2{
        text-align: center;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 3px;
        color: #332902;
      }

      .frame h3{
        text-align: center;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 3px;
        color: #332902;
      }

      .frame .input_field{
        margin-bottom: 10px;
      }

      .frame .input_field input[type="text"],
      .frame textarea{
        border: 1px solid #e0e0e0;
        width: 100%;
        padding: 10px;
      }

      .frame textarea{
        resize: none;
        height: 80px;
      }

      .frame .btn input[type="submit"]{
        border: 0px;
        margin-top: 15px;
        padding: 10px;
        text-align: center;
        width: 100%;
        background: #fece0c;
        color: #332902;
        text-transform: uppercase;
        letter-spacing: 5px;
        font-weight: bold;
        border-radius: 25px;
        cursor: pointer;
      }

      #error_message{
        margin-bottom: 20px;
        background: #fe8b8e;
        padding: 0px;
        text-align: center;
        font-size: 14px;
        transition: all 0.5s ease;
      }

      .registerbtn {
        background-color: lightpink;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
      }

      .registerbtn:hover {
        opacity: 1;
      }
    </style>
  </head>
  <body>
    <div class="frame">
    	<h2>LOG IN</h2>
    	<div id="error_massage"></div>

    	<form id="myform" action="./config/login_db.php" method="POST">
            <div class="input_field">
               <input type="text" placeholder="Username" name="username"required>
            </div>
            <div class="input_field">
               <input type="text" placeholder="Password" name="password"required>
            </div>
            <button type="submit" class="registerbtn" name="login_user">Log in</button>
            <p>Are you not a member ? <a href="register.php">Register</a></p>
        </form>
    </div>
  </body>
</html>