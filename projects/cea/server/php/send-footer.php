<?php

	$email_to = "user@example.com";
    
	$name 		= trim($_POST['name-footer']);
	$phone 		= trim($_POST['phone-footer']);
	$message	= trim($_POST['message-footer']);

	$dt = date('Y-m-d H:i:s');
	
    $errors = [];

	if($name == '') {
		$errors['name-footer'] = 'The name cannot be empty!';
	} elseif (strlen($name) < 2) {
		$errors['name-footer'] = 'Name must be at least 2 characters!';
	}
    
    if($phone == '') {
		$errors['phone-footer'] = 'The phone cannot be empty!';
	} elseif(!validate_phone_number($phone)) {
		$errors['phone-footer'] = 'Enter valid phone!';
	}

    $response = ['res' => empty($errors), 'errors' => $errors];
    
	if($response){
		
		$headers = "Content-type: text/plain; charset=utf-8\r\n";
		$headers .= "\r\n";
		$subject  = 'Заявка на бесплатную консультацию';
		$letter   = "\n
			Заявка: \n

			Name: $name \n
			Phone: $phone \n
			Message: $message";

		$sendmail = mail($email_to, $subject, $letter, $headers);

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