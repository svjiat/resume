<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "svjiat@gmail.com";
    $subject = "Новое сообщение с формы обратной связи";
    $message = "Примечание: " . $_POST['notes'];
    $headers = "From: https://svjiat.github.io/resume/" . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        // Сообщение успешно отправлено
        header('Location: thanks.html'); // Перенаправление на страницу "Спасибо"
        exit;
    } else {
        // Ошибка отправки
        echo "Ошибка при отправке сообщения.";
    }
}
?>