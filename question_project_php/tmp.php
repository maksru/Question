<?php
	require('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VOBU</title>
	<link href="http://vobu.ua/templates/vobu/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,800" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
</head>
<body>
	<section class="page3">
		<div class="page3__wrapper">
			<div class="page3__content">
				<img src="img/logo-vopros.png" alt="" class="page3__logo">
				<p class="page3__lozung">Не упустите свой шанс! Пока вы будете отдыхать <br>
мы будем работать и отвечать на ваши вопросы  </p>
				<h2 class="page3__h">О чем вы хотите спросить <span>газету?</span> </h2>
				<p class="page3__text">Выбирайте категорию и впишите свой вопрос</p>
				
				<form id="view" method="post" action="tmp.php" class="page3__form">
					<input type="radio" name="view" value="1" hidden id="img1">
					<label for="img1" class="page3__label">
						<img src="img/image1.jpg" alt="">
						<p>УЧЕТ</p> 
					</label>
					<input type="radio" name="view" value="2" hidden id="img2">
					<label for="img2" class="page3__label">
						<img src="img/image2.jpg" alt="">
						<p>НАЛОГИ</p>
					</label>
					<input type="radio" name="view" value="3" hidden id="img3">
					<label for="img3" class="page3__label">
						<img src="img/image3.jpg" alt="">
						<p>ПРАВО</p>
					</label>
					<textarea name="vopros" class="page3__vopros" placeholder="Напишите Ваш вопрос"></textarea>
					<input name="email"  placeholder="Email"  class="page3__email">
					<button type="submit" class="page3__btn"><span>ОТПРАВИТЬ</span></button>
				</form>
				
			</div>
		</div>
	</section>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.js"></script>
<script>
    $().ready(function() {
        $.validator.methods.email = function( value, element ) {
            //	console.log(element);
            return this.optional( element ) || /^[0-9a-z-\.]+\@[0-9a-z-]{2,}\.[a-z.]{2,}$/i.test( value );
        }

        // $("#view").validate({
            // rules: {
                // email: {
                    // required: true,
                    // email: true,
                // }
            // },
            // messages: {
                // email: {
                    // required: "Будь ласка, вкажіть Ваш email",
                    // email: "Невірний формат email"
                // }
            // }
        // });
	
		
    });
</script>