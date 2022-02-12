<?php 
  session_start();

  if (!isset($_SESSION['username'])) {
    header('location: login.php');
  }
  
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Information</title>
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

      .frame .input_field input[type="password"],
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
        display: block;
        background-color: lightpink;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
        text-align: center;
        text-decoration:none;
      }

      .registerbtn:hover {
        opacity: 1;
      }
    </style>
  </head>
  <body>
    <div class="frame">
    	<h2>INFORMATION</h2>
    	<div id="error_massage"></div>

    	<form id="myform">
            <div class="input_field">
               <input type="text" placeholder="Name" name="name" value="<?php echo $_SESSION['name']; ?>" required>
            </div>
            <div class="input_field">
               <input type="text" placeholder="Username" name="username" value="<?php echo $_SESSION['username']; ?>" required>
            </div>
            <div class="input_field">
               <input type="password" placeholder="Password" name="password" value="<?php echo $_SESSION['password']; ?>" required>
            </div>
            <div class="input_field">
               <input type="text" placeholder="Email" name="email" value="<?php echo $_SESSION['email']; ?>" required>
            </div>
            <div class="input_field">
               <input type="text" placeholder="Tel" name="tel" value="<?php echo $_SESSION['tel']; ?>" required>
            </div>
            <div class="input_field">
               <input type="text" placeholder="Address" name="address" value="<?php echo $_SESSION['address']; ?>" required>
            </div>
            <button type="submit" class="registerbtn">SUBMIT</button>
            <a href="home.php" class="registerbtn"><p>Back to Home</p></a>
        </form>
    </div>
  </body>
</html>