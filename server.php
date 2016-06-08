<?php
$dir = 'img/'; // Папка с изображениями
$files = scandir($dir); // Берём всё содержимое директории
$collection = array ();
for ($i = 0; $i < count($files); $i++) { // Перебираем все файлы
    if (($files[$i] != ".") && ($files[$i] != "..")) { // Текущий каталог и родительский пропускаем
        $filename = pathinfo($dir.$files[$i], PATHINFO_FILENAME);
        array_push($collection, $filename);
    }
}
echo json_encode ($collection);
?>

