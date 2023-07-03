<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="register.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="register.html">login now</a></p>
   </form>

</div>

</body>
</html>

<?php
if(isset($_POST['submit'])){

   // to validate username
if(empty($name)){
   $name = $_POST['name'];
   if(!preg_match("/^[a-zA-Z]*$/", $name)){
       echo "only letters are allowed <br>";
   }else{
       echo "your  first name is $name <br>";
   }
}

// to validate email
$email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);

if(empty($email)){
   echo "thats not validate name <br>";
}else{
   echo "your email is $email <br>";
}

// to validate password
$password = $_POST['password'];
if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password)) {
echo "Password must be at least 8 characters and strong <br>";
} else {
echo "Your password is  $password.<br>";
}

// to validate password witj confirm password
$cpassword = $_POST['cpassword'];
if($_POST['password'] != $_POST['cpassword']){
  echo "Your passwords did not match.<br>";

}

}

?>