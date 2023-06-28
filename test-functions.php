<?php
require_once './test-portfolio.php';

// Обработка AJAX-запроса и формирование ответа

$dataId = $_GET['dataId'];
$srcImg1 = $_GET['srcImg1'];
$srcImg2 = $_GET['srcImg2'];
$text = $_GET['text'];

$imgs = explode(" ", $srcImg1 . " " . $srcImg2);

$response = array(
    'status' => 'success',
    'message' => 'Запрос успешно обработан',
    'data' => array(
        'id' => $id,
        'text' => $text,
        'imgs' => $imgs,
        'my-data-id' => $dataId
    )
);



// Устанавливаем заголовок для указания типа данных JSON
header('Content-Type: application/json');

// Возвращаем ответ в формате JSON
echo json_encode($response);
