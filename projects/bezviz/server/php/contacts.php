<?php
	include_once('helpers/validate-number.php');

	$email_to = "user@example.com";
    
	$name = trim($_POST['order-name']);
	$phone = trim($_POST['order-phone']);
	$time = trim($_POST['order-time']);
	$date = trim($_POST['order-date'] ?? 'Не указано');
	$service = trim($_POST['order-service']);
	$lang = $_POST['order-lang'];
	
    $errors = [];

    if($name == '') {
    	if($lang === "en") {
			$errors['order-name'] = 'Enter your name!';
    	}
    	else {
			$errors['order-name'] = 'Введите имя!';
    	}
	} elseif (strlen($name) < 2) {
		if($lang === "en") {
			$errors['order-name'] = 'At least 2 letters in the name!';
    	}
    	else {
			$errors['order-name'] = 'Миниммум 2 буквы в имени!';
    	}
	}

	if($phone == '') {
		if($lang === "en") {
			$errors['order-name'] = 'Enter your phone number!';
    	}
    	else {
			$errors['order-phone'] = 'Укажите свой телефон!';
    	}
	} elseif(!validate_phone_number($phone)) {
		if($lang === "en") {
			$errors['order-name'] = 'Enter the correct number!';
    	}
    	else {
			$errors['order-phone'] = 'Введите корректный номер!';
    	}
	}

    $response = ['res' => empty($errors), 'errors' => $errors, 'lang' => $lang];
    
	if(empty($errors)){
		$headers = 'From: bezviz.co <info@bezviz.co>' . "\r\n" .
    	'Reply-To: info@bezviz.co' . "\r\n" . 
    	'X-Mailer: PHP/' . phpversion();

		$subject  = 'Новая заявка с сайта bezviz.co';
		$letter   = "Услуга: $service \nИмя: $name \nТелефон: $phone \nВремя для связи: $time \nВремя: $date \n";

		$sendmail = mail($email_to, $subject, $letter, $headers);
	}
    
    echo json_encode($response);