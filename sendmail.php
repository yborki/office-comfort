<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = $_POST['name'] ?? '';
    $contact = $_POST['contactInfo'] ?? '';
    $area = $_POST['area'] ?? '';
    $comment = $_POST['comment'] ?? '';
    
    // ВАЖНО: замените этот email на свой!
    $to = "sofia.fedotova18@gmail.com";
    
    $subject = "Новая заявка с сайта Офис-Комфорт";
    
    $message = "
    <html>
    <head><title>Новая заявка</title></head>
    <body>
        <h2>Заявка с сайта</h2>
        <p><strong>Имя:</strong> $name</p>
        <p><strong>Контакт:</strong> $contact</p>
        <p><strong>Площадь офиса:</strong> $area м²</p>
        <p><strong>Комментарий:</strong> $comment</p>
    </body>
    </html>
    ";
    
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $contact" . "\r\n";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
