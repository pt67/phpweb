
<html>
<head>
<title>WhatEva</title>
<link rel="stylesheet" href="../css/style.css" style="text/css" >
<style>
#thank{
background:red;
padding:5px;
color: #fff;
width:360px;
text-align: center;
margin:auto;
}
</style>
</head>

<body>
<header>
<div id="logo">
<h1>WhatEva</h1>
</div>

<div class="menu">
<nav>
<a href="<?php echo "../" ?>" >Return Home</a>

</nav>
</div>

</header>

<body>
<section class="contact">
<?php
include "../db.php";




if (isset($_POST['submit'])){
	
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];	

$sql = "INSERT INTO `Uinfo` (`fname`, `lname`, `email`, `phone`) VALUES ('$fname', '$lname', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "<div id='thank'>Thank you for contacting us</div>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}


$conn->close();

?>

<form action="#" method="POST" id="Uform">
<input type="text" placeholder="First Name" name="fname" required><br>
<input type="text" placeholder="Last Name" name="lname" required><br>
<input type="email" name="email" placeholder="Email" required><br>
<input type="phone" name="phone" maxlength="10" placeholder="Phone Number" required><br>
<textarea cols="35" rows="5" required></textarea><br>
<select>
<option>--select</option>
<option>Weeding website</option>
<option>Commercial website</option>
<option>Squiz website</option>
<option>News portal website</option>
<option>Company website</option>
<option>Landing page</option>
</select><br>
<button type="submit" name="submit">Submit</button>
</form>
</section>

<script type="text/javascript" >

addEventListener("load", resetall);
function resetall() {
	document.getElementById("Uform").reset();
}

function thanku() {
	document.getElementById("thank").style.display="none";
}
setTimeout(thanku ,3000);
</script>

</body>
