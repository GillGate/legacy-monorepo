<?php
	include_once('helpers/validate-number.php');

	$email_to = "user@example.com";
    
	$name = trim($_POST['contact-name']);
	$work = trim($_POST['contact-work']);
	$project = trim($_POST['contact-type']);
	$budget = trim($_POST['contact-budget']);
	$email = trim($_POST['contact-email']);
	$phone = trim($_POST['contact-phone']);
	$message = trim($_POST['contact-message']);

	$dt = date('Y-m-d H:i:s');
	
    $errors = [];

    if($name == '') {
		$errors['contact-name'] = 'Enter your name!';
	} elseif (strlen($name) < 2) {
		$errors['contact-name'] = 'The name must contain at least 2 letters!';
	}

	if($work == '') {
		$errors['contact-work'] = 'Specify your place of work!';
	}

	if($phone == '') {
		$errors['contact-phone'] = 'Enter your phone number!';
	} elseif(!validate_phone_number($phone)) {
		$errors['contact-phone'] = 'Enter the correct number!';
	}

	if($email == '') {
		$errors['contact-email'] = 'Enter your email!';
	}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors['contact-email'] = 'Enter the correct email!';
	}

    $response = ['res' => empty($errors), 'errors' => $errors];
    
	if(empty($errors)){
		$headers = 'From: gillgate.bhuser.ru <noreply@example.com>' . "\r\n" .
    	'Reply-To: noreply@example.com' . "\r\n" . 
    	'X-Mailer: PHP/' . phpversion();

		$subject  = 'Новая заявка на сайте!';
		$letter   = 
		"Имя: $name \n Работа: $work \n Проект: $project \n Бюджет: $budget \n Почта: $email \n Телефон: $phone \n Дополнительно: \n $message";

		$sendmail = mail($email_to, $subject, $letter, $headers);
	}
    
    echo json_encode($response);