<?php
session_start();
define("MAX_IDLE_TIME", 3);
function getOnlineUsers(){
if ( $directory_handle = opendir( session_save_path() ) ) {
$count = 0;
while ( false !== ( $file = readdir( $directory_handle ) ) ) {
if($file != '.' && $file != '..'){
if(time()- filemtime(session_save_path() . '/' . $file) < MAX_IDLE_TIME * 60) {
$count++;
}
} }
closedir($directory_handle);
return $count;
} else {
return false;
}}
$session = getOnlineUsers(); 
//echo 'Пользователей онлайн: ' . getOnlineUsers() . '<br />';

require_once 'Templates.php'; //подключение файла отрисовки страницы
require_once 'controller.php'; //Управление бд

	
//выбор страницы
    $res = mysqli_query( $db, 'SELECT * FROM `articles`' ); //выбор заголовка и текста страницы из бд
    $row = mysqli_fetch_array( $res ); //обработка выбранных данных
    $title = $row[1]; //заголовок страницы
    $text = $row[2]; //текст страницы
    $imglink = $row[3]; //ссылка на картинку страницы
show_page( $title, $text, $imglink, $session); //функция отрисовки страницы из templates.php
?>
