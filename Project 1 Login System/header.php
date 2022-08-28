<!-- Horizontal navbar from https://www.w3schools.com/ -->

<!DOCTYPE html>
<html>
<head>
<link href=../styles.css rel="stylesheet">
</head>


<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: rgb(44, 42, 42);
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>



<body style="background-color: rgb(105, 102, 102)">
<ul>
  <li><a class="active" href="loginpage.php">Home</a></li>
  
  <li><a href='login.php'>Log In</a></li>
  <li><a href='signup.php'>Sign Up</a></li>
</ul>
</body>
