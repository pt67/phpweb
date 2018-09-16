<?php
session_destroy();

?>

<html>
<head>
<title>WhatEva</title>
<link rel="stylesheet" href="css/style.css" style="text/css" >
</head>

<body>
<header>
<div id="logo">
<h1>WhatEva</h1>
</div>

<div class="menu">
<nav>
<a href="#" >Home</a>
<a href="#projects" >Projects</a>
<a href="#aboutme" >About me</a>
<a href="<?php echo "signup"?>" >Signup</a>
</nav>
</div>

</header>

<section class="showcase">
<h1>Welcome! to WhatEva </h1>
<p>I have a team of more than 5 in my company. I usually develop websites with my team and <br>interact with 
other companies deal. </p>
<button>Get on Touch!</button>
</section>

<section id="projects"> 

<h1> Our Projects </h1>

<div class="project">
<article class="box">
<h3>Commercial website</h3>
<p>We create very impressive commercial website.</p>
<img src="images/pexels-photo-106344.jpeg" alt="">
</article>

<article class="box">
<h3>Weeding website</h3>
<p>We create very impressive eye-catchy Weeding website.</p>
<img src="images/pexels-photo-256737.jpeg" alt="">
</article>

<article class="box">
<h3>Squiz website</h3>
<p>We create very impressive eye-catchy Squiz website.</p>
<img src="images/hands-woman-laptop-working.jpg" alt="">
</article>
</div>

<div class="projectt">
<article class="box">
<h3>News portal website</h3>
<p>We create very impressive eye-catchy news portal website.</p>
<img src="images/pexels-photo-1327218.jpeg" alt="">
</article>

<article class="box">
<h3>Company website</h3>
<p>We create very impressive eye-catchy Company website.</p>
<img src="images/pexels-photo-443383.jpeg" alt="">
</article>

<article class="box">
<h3>Landing page</h3>
<p>We create very impressive eye-catchy landing page.</p>
<img src="images/pexels-photo-1359935.jpeg" alt="">
</article>
</div>

</section>

<section id="aboutme">
<article class="boxes">
<h1>About Me</h1>
<p>Working as a web developer in the field of Web development industry. </p>

</article>
</section>

</body>
</html>