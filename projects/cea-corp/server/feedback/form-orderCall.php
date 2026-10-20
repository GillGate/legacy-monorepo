<?php

	$email_to = "user@example.com";
    
	$name 		= trim($_POST['oc-name']);
	$email 		= trim($_POST['oc-email']);
	$message 	= trim($_POST['oc-message']);

	$dt = date('Y-m-d H:i:s');
	
    $errors = [];

	if($name == '') {
		$errors['oc-name'] = 'Vyplňte pole!';
	} elseif(strlen($name) < 2) {
		$errors['oc-name'] = 'Název musí obsahovat více než 2 znaky!';
	}

	if($message == '') {
		$errors['oc-message'] = 'Vyplňte pole!';
	} elseif(strlen($message) < 10) {
		$errors['oc-message'] = 'Název musí obsahovat více než 10 znaky!';
	}

	if($email == '') {
		$errors['oc-email'] = 'Vyplňte pole!';
	} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors['oc-email'] = 'Zadejte platný e-mail!';
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