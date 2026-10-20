<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

    $requester = $_POST['requester'] ?? '';
    $type = $_POST['type'] ?? '';
    $theme = $_POST['theme'] ?? '';
    $theme_current = $_POST['theme_current'] ?? '';
    $short_desc = $_POST['short_desc'];
    $attachments = $_POST['attachments'];
    $desc = $_POST['desc'];
    $sec_name = $_POST['sec_name'];
    $name = $_POST['name'];
    $fatherhood = $_POST['fatherhood'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $confirm = $_POST['confirm'] ?? false;

    $errors = [];

    if($requester === '') {
        $errors[] = 'Выберите вид заявителя!';
    } else if($type === '') {
        $errors[] = 'Выберите тип обращения!';
    } else if($theme === '') {
        $errors[] = 'Выберите тематику!';
    } else if($theme_current === '') {
        $errors[] = 'Уточните тематику!';
    } else if($short_desc === '') {
        $errors[] = 'Введите краткое описание!';
    } else if($sec_name === '') {
        $errors[] = 'Введите фамилию!';
    } else if($name === '') {
        $errors[] = 'Введите имя!';
    } else if($fatherhood === '') {
        $errors[] = 'Введите отчество!';
    } else if($phone === '') {
        $errors[] = 'Введите телефон!';
    } else if (!validate_phone_number($phone)) {
        $errors[] = 'Введите корректный телефон!';
    } else if($email === '') {
        $errors[] = 'Введите почту!';
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Введите корректную почту!';
    } else if (!$confirm) {
        $errors[] = 'Ознакомьтесь с правилами приёма и обработки обращений граждан!';
    }
    
    CModule::IncludeModule("iblock");

    $el = new CIBlockElement;

    $PROP = array();
    $PROP[65] = "$requester";
    $PROP[66] = "$type";
    $PROP[67] = "$theme";
    $PROP[68] = "$theme_current";
    $PROP[69] = "$short_desc";
    $PROP[70] = "$attachments";
    $PROP[71] = "$desc";
    $PROP[72] = "$sec_name";
    $PROP[73] = "$name";
    $PROP[74] = "$fatherhood";
    $PROP[75] = "$phone";
    $PROP[76] = "$email";

    $arItems = Array(
        "IBLOCK_SECTION_ID" => true,
        "IBLOCK_ID"      => 18,
        "PROPERTY_VALUES"=> $PROP,
        "NAME"           => "$name",
        "ACTIVE"         => "Y",
    ); 

    $response = ['confirm' => $_POST['confirm'], 'res' => empty($errors), 'errors' => $errors];
    echo json_encode($response);

    if($response['res']) {
        $el->Add($arItems);
    }

    function validate_phone_number($phone) {
		$filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
		$phone_to_check = str_replace("-", "", $filtered_phone_number);
		if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
			return false;
		} else {
			return true;
		}
	}