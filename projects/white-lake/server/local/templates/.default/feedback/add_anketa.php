<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

    $year = $_POST['year'] ?? '';
    $month = $_POST['month'] ?? '';
    $sanatory = $_POST['sanatory'];
    $an_q_3 = $_POST['anketa-q-3'] ?? '';
    $an_q_4 = $_POST['anketa-q-4'] ?? '';
    $an_q_5 = $_POST['anketa-q-5'] ?? '';
    $an_q_6 = $_POST['anketa-q-6'] ?? '';
    $an_q_7 = $_POST['anketa-q-7'] ?? '';
    $an_q_8 = $_POST['anketa-q-8'] ?? '';
    $an_q_9 = $_POST['anketa-q-9'] ?? '';
    $an_q_10 = $_POST['anketa-q-10'] ?? '';
    $an_q_11 = $_POST['anketa-q-11'] ?? '';
    $an_q_12 = $_POST['anketa-q-12'] ?? '';
    $an_q_13 = $_POST['anketa-q-13'] ?? '';
    $an_q_14 = $_POST['anketa-q-14'] ?? '';
   
    $errors = [];

    if($year === '') {
        $errors[] = 'Укажите год!';
    } else if($month === '') {
        $errors[] = 'Укажите месяц!';
    } else if($email === '') {
        $errors[] = 'Введите почту!';
    } else if($an_q_3 === '') {
        $errors[] = 'Укажите, сколько времени Вы ожидали заселения?';
    } else if($an_q_4 === '') {
        $errors[] = 'Укажите впечатление о работе администратора!';
    } else if($an_q_5 === '') {
        $errors[] = 'Укажите, предлагали ли Вам платные услуги?';
    } else if($an_q_10 === '') {
        $errors[] = 'Оцените, пожалуйста, качество питания!';
    } else if($an_q_11 === '') {
        $errors[] = 'Оцените, пожалуйста, качество уборки номера!';
    } else if($an_q_12 === '') {
        $errors[] = 'Укажите, удовлетворены ли Вы состоянием прилегающей территории и объектов инфраструктуры санатория?';
    } else if($an_q_13 === '') {
        $errors[] = 'Укажите, удовлетворены ли Вы условиями пребывания в санатории?!';
    } else if($an_q_14 === '') {
        $errors[] = 'Укажите, рекомендовали бы Вы наш санаторий для получения медицинской помощи/реабилитации?';
    }
    
    CModule::IncludeModule("iblock");

    $el = new CIBlockElement;

    $PROP = array();
    $PROP[77] = "$year";
    $PROP[78] = "$month";
    $PROP[79] = "$sanatory";
    $PROP[80] = "$an_q_3";
    $PROP[81] = "$an_q_4";
    $PROP[82] = "$an_q_5";
    $PROP[83] = "$an_q_6";
    $PROP[84] = "$an_q_7";
    $PROP[85] = "$an_q_8";
    $PROP[86] = "$an_q_9";
    $PROP[87] = "$an_q_10";
    $PROP[88] = "$an_q_11";
    $PROP[89] = "$an_q_12";
    $PROP[90] = "$an_q_13";
    $PROP[91] = "$an_q_14";

    $arItems = Array(
        "IBLOCK_SECTION_ID" => true,
        "IBLOCK_ID"      => 19,
        "PROPERTY_VALUES"=> $PROP,
        "NAME"           => "$year $month: $sanatory",
        "ACTIVE"         => "Y",
    );

    $response = ['res' => empty($errors), 'errors' => $errors];
    echo json_encode($response);

    if($response['res']) {
        $el->Add($arItems);
    }