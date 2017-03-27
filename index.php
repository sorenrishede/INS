<?php

$value=200;
setcookie("MySecretLittleHelper",$value, time()+3600*24);
?>
	
<h1>INS - Vi bruger cookies</h1>


<div>
<?php if ($_COOKIE['MySecretLittleHelper']=200) {
	echo "Du har tidligere søgt på INS";
}
?>
</div>

<pre>
<?php print_r($_COOKIE);?>
</pre>



<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>INS</title>

<link href="css/stylesheet.css" rel="stylesheet">

</head>

<body

<header>
<!-- Nav bar -->
<ul class="nav">
	<li class="current"> <a href=index.php>Forside</a></li>
	<li> <a href=underside.php>Underside</a></li>
	</ul>
</header>

<!-- Sektion 1 -->
<div class="row"> 
	<div class="col-lg-12"> <img src="img/ins.jpg" width="100%" alt="Os<3"/>
</div>

</body>
</html>