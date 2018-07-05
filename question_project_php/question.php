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
				<p class="question__lozung">Не упустите свой шанс! Пока вы будете отдыхать <br>
мы будем работать и отвечать на ваши вопросы  </p>
				<h2 class="question__h">О чем вы хотите спросить <span>газету?</span> </h2>
				<p class="question__text">Выбирайте категорию и впишите свой вопрос</p>
				<form class="question__form" id="sender_q">
					<input type="radio" name="view" value="1" hidden id="img1" class="view">
					<label for="img1" class="question__label">
						<img src="img/image1.jpg" alt="">
						<p>УЧЕТ</p> 
					</label>
					<input type="radio" name="view" value="2" hidden id="img2" class="view2">
					<label for="img2" class="question__label">
						<img src="img/image2.jpg" alt="">
						<p>НАЛОГИ</p>
					</label>					
					<input type="radio" name="view" value="3" hidden id="img3" class="view3">
					<label for="img3" class="question__label">
						<img src="img/image3.jpg" alt="">
						<p>ПРАВО</p>
					</label>
					<div class="hidden_form">
						<textarea name="question" class="question__textarea message" placeholder="Напишите Ваш вопрос" required></textarea>
						<input type="email" name="email" placeholder="Email"  class="question__email email" required>
						<button type="submit" class="question__btn"><span>ОТПРАВИТЬ</span></button>
					</div>
				</form>
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