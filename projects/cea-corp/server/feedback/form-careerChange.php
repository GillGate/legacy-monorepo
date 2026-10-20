<?php

	$email_to = "user@example.com";
    
	$name 	= trim($_POST['career-name']);
	$email 	= trim($_POST['career-email']);
	$phone 	= trim($_POST['career-phone']);

	$dt = date('Y-m-d H:i:s');
	
    $errors = [];

	if($name == '') {
		$errors['career-name'] = 'Vyplňte pole!';
	} elseif(strlen($name) < 2) {
		$errors['career-name'] = 'Název musí obsahovat více než 2 znaky!';
	}

	if($phone == '') {
		$errors['career-phone'] = 'Vyplňte pole!';
	} elseif(!validate_phone_number($phone)) {
		$errors['career-phone'] = 'Zadejte správné telefonní číslo!';
	}

	if($email == '') {
		$errors['career-email'] = 'Vyplňte pole!';
	} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors['career-email'] = 'Zadejte platný e-mail!';
	}

    $response = ['res' => empty($errors), 'errors' => $errors];
    
	if(empty($errors)){

		$headers = "";
		$headers .= "From: cea.cz \r\n";
		$headers .= "Content-type': 'text/plain; charset=utf-8 \r\n";

		$subject  = 'Заявка на вакансию';
		$letter   = "Заявка: \n Имя: $name \n Email: $email \n";

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