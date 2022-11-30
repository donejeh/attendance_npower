<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Npower Attendance System</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

   <link rel="stylesheet" href="./css/styles.css">

</head>


<body id="ourBody">
   
 <img id="logo" src="./images/logo.png" alt="npower logo here" >

 <h1> Welcome to our Npower Attendance system  </h1>

 
 <form action="" method="POST">
    <p> REGISTER FORM</p>
  
Npowe-ID : <input type="text" name="id"  /> <br>
First Name : <input type="text" name="fname"  /> <br>
SurName : <input type="text" name="sname"  /> <br>
AGE :  <br><input type="number"  name="age" /> <br>
Password : <input type="password" name="password" id="id_password"  /><i class="far fa-eye" id="togglePassword"></i>
 <br>
Re-type Password : <input type="password"  /> <br>
Gender :

Male : <input type="radio" value="male" name="gender" > 
Female: <input type="radio" value="female" name="gender" > <br>
<br>
<input type="submit" value="Register now"  >

Already a User? <a style="color:red" href="register.php"> Login here</a>
</form>


<script>    

const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');

  });


</script>
</body>
</html>

<?php


?>