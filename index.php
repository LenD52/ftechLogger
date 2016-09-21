<?php
    include 'db.php';
    include 'log.php';
    new connectDB(); // Подключение к ДБ.
    $newText = new Logger('Второй текст.');     // Ввод информации в класс.
    $newText->checkLogs('logs');     // Запись логов в массив.
    $newText->showLogs();    // Показать логи из массива.
    echo $newText->adLog('logs');
    //echo '['.$newText->showDate()."] ";
    //echo $newText->showText()."<br>";
?>