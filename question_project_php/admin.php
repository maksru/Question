<?php
	require('connect.php');
	include ('scripts/easy-lock.php');
	lock("1234");

	$sub =  R::getAll("SELECT * FROM `view`");
	$i = 0;
	$t = 0;
	$g = 0;
	foreach ($sub as $select)
	{
		if ($select['check'] == "1")
			++$i;
		elseif($select['check'] == "2")
			++$t;
		else
			++$g;
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Opros</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,800" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<section class="question">
		<div class="question__wrapper">
			<div class="question__content">
				<img src="img/logo.png" alt="" class="question__logo">
				<h2 class="question__h">СТАТИСТИКА</h2>
				<input type="radio" name="view" value="1" hidden id="img1" class="view">
				<label for="img1" class="question__label">
					<img src="img/image1.jpg" alt="">
					<p>УЧЕТ<br /><?php print_r($i);?></p>
				</label>
				<input type="radio" name="view" value="2" hidden id="img2" class="view2">
				<label for="img2" class="question__label">
					<img src="img/image2.jpg" alt="">
					<p>НАЛОГИ<br /><?php print_r($t);?></p>
				</label>					
				<input type="radio" name="view" value="3" hidden id="img3" class="view3">
				<label for="img3" class="question__label">
					<img src="img/image3.jpg" alt="">
					<p>ПРАВО<br /><?php print_r($g);?></p>
				</label>
			</div>
		</div>
		<img src="img/lozung.png" class="lozung">
	</section>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
	<script src="js/function.js"></script> 
</body>
</html>