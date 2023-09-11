<?php
// Список файлов, которые вы хотите обработать
$files = ['index.php', 'services.php', 'products.php'];

// Перебираем каждый файл
foreach ($files as $phpFile) {
    // Определяем имя HTML файла
    $htmlFile = str_replace('.php', '.html', $phpFile);

    // Включаем буферизацию вывода
    ob_start();

    // Выполняем PHP файл
    include $phpFile;

    // Получаем содержимое буфера вывода
    $output = ob_get_clean();

    // Проверяем наличие инструкции включения и обрабатываем ее
    while (preg_match('/<\? include \'\.\/partials\/(.+?)\'; \?>/', $output, $matches)) {
        $includeFile = $matches[1];
        $includeContent = file_get_contents('./partials/' . $includeFile);
        $output = str_replace($matches[0], $includeContent, $output);
    }

    // Записываем результат в HTML файл
    file_put_contents($htmlFile, $output);

    // Выводим сообщение о завершении
    echo "Demo file $htmlFile is created\n";
}
?>
