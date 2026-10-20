<?php

	$email_to = "user@example.com";
    
	$name 		= trim($_POST['cooperation-name']);
	$company 	= trim($_POST['cooperation-company']);
	$email 		= trim($_POST['cooperation-email']);
	$phone 		= trim($_POST['cooperation-phone']);
	$comment 	= trim($_POST['cooperation-comment']);

	$dt = date('Y-m-d H:i:s');
	
    $errors = [];

	if($name == '') {
		$errors['cooperation-name'] = 'Vyplňte pole!';
	} elseif(strlen($name) < 2) {
		$errors['cooperation-name'] = 'Název musí obsahovat více než 2 znaky!';
	}

	if($company == '') {
		$errors['cooperation-company'] = 'Vyplňte pole!';
	}

	if($email == '') {
		$errors['cooperation-email'] = 'Vyplňte pole!';
	} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors['cooperation-email'] = 'Zadejte platný e-mail!';
	}
    
    if($phone == '') {
		$errors['cooperation-phone'] = 'Vyplňte pole!';
	} elseif(!validate_phone_number($phone)) {
		$errors['cooperation-phone'] = 'Zadejte správné telefonní číslo!';
	}

    $response = ['res' => empty($errors), 'errors' => $errors];
    
	if(empty($errors)){

		$headers = "";
		$headers .= "From: cea.cz \r\n";
		$headers .= "Content-type': 'text/plain; charset=utf-8 \r\n";

		$subject  = 'Заявка на вакансию';
		$letter   = "Заявка: \n Имя: $name \n Телефон: $phone \n";

		// $sendmail = mail($email_to, $subject, $letter, $headers);

		// echo json_encode($sendmail);
	}
    
    echo json_encode($response);

    function validate_phone_number($phone) {
		$filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
		$phone_to_check = str_replace("-", "", $filtered_phone_number);
		if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
			return false;
		} else {
			return true;
		}
	}