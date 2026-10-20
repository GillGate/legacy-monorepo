<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

    $year = $_POST['year'] ?? '';
    $month = $_POST['month'] ?? '';
    $sanatory = $_POST['sanatory'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $review = $_POST['review'];

    $errors = [];

    if($year === '') {
        $errors[] = 'Укажите год!';
    } else if($month === '') {
        $errors[] = 'Укажите месяц!';
    } else if($name === '') {
        $errors[] = 'Введите имя!';
    } else if($email === '') {
        $errors[] = 'Введите почту!';
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Введите корректную почту!';
    }
    
    CModule::IncludeModule("iblock");

    $el = new CIBlockElement;

    $PROP = array();
    $PROP[58] = "$year";
    $PROP[59] = "$month";
    $PROP[60] = "$sanatory";
    $PROP[62] = "$email";
    $PROP[63] = "$review";

    $arItems = Array(
        "IBLOCK_SECTION_ID" => true,
        "IBLOCK_ID"      => 17,
        "PROPERTY_VALUES"=> $PROP,
        "NAME"           => "$name",
        "ACTIVE"         => "Y",
    );

    $response = ['res' => empty($errors), 'errors' => $errors];
    echo json_encode($response);

    if($response['res']) {
        $el->Add($arItems);
    }