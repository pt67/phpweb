

<?php

include "../db.php";

if (isset($_POST['submit'])){
$username = $_POST['uname'];
$password = $_POST['pass'];
	
$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($row = $result->fetch_assoc()){
header("Location: admin.php");
}else {
	echo "you entered wrong username or password";
}

}


 
?>

<!DOCTYPE html>
<html>
<head>
<title>Login to admin</title>
<style type="text/css">
*{
text-align: center;
}
.userlogin{
	padding:5% 10% 5% 10%;
}
 
.userlogin form{

}
form input{
border:1px solid red;
padding:3px;
margin:5px;
padding:5px;
text-align: left;
}
form button{
border:1px solid red;
padding:3px;
margin:5px;
padding:5px;
background:red;
color: #fff;
margin-left:-185px;
}
</style>
</head>

<body>
<div class="userlogin">
<h1>Login to admin</h1>
<form method="POST" action="#">
<input type="text" placeholder="Username" name="uname"><br>
<input type="password" placeholder="Password" name="pass"><br>
<button type="submit" name="submit">Login</button>
</form>

</div>
</body>
</html>
