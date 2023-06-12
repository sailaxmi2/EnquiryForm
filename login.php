<html>

<head>
  <title>Login | Peramsons Academy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./dist/styles.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <style>
  .login{
    background: url('./dist/images/login-new.jpeg')
  }
  </style>  
</head>

<body class="h-screen font-sans login bg-cover">
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
  <div class="w-full max-w-lg">
    <div class="leading-loose">
      <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" action="" method="POST">
        <p class="text-gray-800 font-medium text-center text-lg font-bold">Login</p>
        <div class="">
          <label class="block text-sm text-gray-00" for="username">Username</label>
          <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="username" name="user" type="text" required="" placeholder="User Name" aria-label="username">
        </div>
        <div class="mt-2">
          <label class="block text-sm text-gray-600" for="password">Password</label>
          <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="pass" type="password" required="" placeholder="*******" aria-label="password">
        </div>
        <div class="mt-4 items-center justify-between">
          <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" name="submit">Login</button>
          <a class="inline-block right-0 align-baseline  font-bold text-sm text-500 hover:text-blue-800" href="#">
            Forgot Password?
          </a>
        </div>
        <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="#">
          Not registered ?
        </a>
      </form>
 
    </div>
  </div>
</div>
</body>

</html>


<?php
  include('conn.php');
  session_start();

  if(isset($_POST['submit']))
  {
    if (isset($_POST['user']) && isset($_POST['pass']))
     {
      $username = $_POST['user'];
      $password = $_POST['pass'];

      $query = mysqli_query($connection, " SELECT * FROM `login` 
        WHERE User_Name = '".$username."' AND Password = '".$password."' ");

      $num_rows = mysqli_num_rows($query);

        if($num_rows != 0)
        {
          echo "Login Successfull";
          $_SESSION ['User_Name'] = $username;

          header("location:index.php"); 

        }
        else
        {
          echo "Error Occured: wrong password or username";

          header("location:login.php");
        }
      # code...
    }
  }
?>