<?php

	$email_to = "user@example.com";

	$lang 	= trim($_POST['contact-language']);
    
	$vakancy 	= trim($_POST['contact-vakancy']);
	$name 		= trim($_POST['contact-name']);
	$phone 		= trim($_POST['contact-phone']);
	$msg 		= trim($_POST['contact-msg']);

	$dt = date('Y-m-d H:i:s');
	
    $errors = [];

    if($lang === "ua") {
    	if($name == '') {
			$errors['contact-name'] = "Ім'я не може бути порожнім!";
		} elseif (strlen($name) < 2) {
			$errors['contact-name'] = "Ім'я повинно містити принаймні 2 літери!";
		}
	    
	    if($phone == '') {
			$errors['contact-phone'] = "Телефон не може бути порожнім!";
		} elseif(!validate_phone_number($phone)) {
			$errors['contact-phone'] = "Введіть коректний номер!";
		}
    } else if($lang === "cz") {
    	if($name == '') {
			$errors['contact-name'] = "Jméno nemůže být prázdné!";
		} elseif (strlen($name) < 2) {
			$errors['contact-name'] = "Jméno musí obsahovat alespoň 2 písmena!";
		}
	    
	    if($phone == '') {
			$errors['contact-phone'] = "Telefon nemůže být prázdný!";
		} elseif(!validate_phone_number($phone)) {
			$errors['contact-phone'] = "Zadejte správné číslo!";
		}
    }  else if($lang === "en") {
    	if($name == '') {
			$errors['contact-name'] = "Name can't be empty!";
		} elseif (strlen($name) < 2) {
			$errors['contact-name'] = "Name must be at least 2 characters!";
		}
	    
	    if($phone == '') {
			$errors['contact-phone'] = "Phone can't be empty!";
		} elseif(!validate_phone_number($phone)) {
			$errors['contact-phone'] = "Enter valid phone!";
		}
    } else {
    	if($name == '') {
			$errors['contact-name'] = "Имя не может быть пустым!";
		} elseif (strlen($name) < 2) {
			$errors['contact-name'] = "Имя должно содержать как минимум 2 буквы!";
		}
	    
	    if($phone == '') {
			$errors['contact-phone'] = "Телефон не может быть пустым!";
		} elseif(!validate_phone_number($phone)) {
			$errors['contact-phone'] = "Введите корректный номер!";
		}
    }

    $response = ['res' => empty($errors), 'errors' => $errors];
    
	if(empty($errors)){
		$headers = 'From: www.almaxwork.cz <info@almaxwork.cz>' . "\r\n" .
    	'Reply-To: info@almaxwork.cz' . "\r\n" . 
    	'X-Mailer: PHP/' . phpversion();

		$subject  = 'Новая заявка на сайте!';
		$letter   = "Заявка: \n  Вакансия: $vakancy \n  Имя: $name \n  Телефон: $phone \n  Комментарий: $msg \n";

		$sendmail = mail($email_to, $subject, $letter, $headers);
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