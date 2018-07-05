<?php
 	require('../connect.php');

	$data = $_POST;
	$sub = R::dispense('view');
	$sub->check = $data['view'];
	$sub->message = $data['question'];
	$sub->email = $data['email'];
	$sub->adtime = date('Y-m-d H:i');

	$id = R::store($sub);	
			
	// if ($send == 1)
	// {
		// $file = false;

		// $name = $popup['name'];
		// $email = $popup['email'];

		// $theme = "Безпечний бізнес із «Все про бухгалтерський облік»";
		// $body = '123';

		// SendMail(array($email, $theme, $body), null, 'text/html', $file);
		

		// $theme_adm = "Новый Клиент";
		// $body_adm = 'У Вас новый клиент';
		
		// SendMail(array('vova.symonchuk@gmail.com', $theme_adm, $body_adm), null, 'text/html', $file);
	// }

 	$out = array(
		'corect' => 'ok'
	);

	header('Content-Type: text/json; charset=utf-8');
	echo json_encode($out);
