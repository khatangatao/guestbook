<?php
require_once('config/config.php');

echo '<form method = "POST">';
echo '<p><b>Ваше имя:</b><Br>';
echo '<input type="text" name = "name">';
echo '<p><b>Ваш емайл:</b><Br>';
echo '<input type="text" name = "email">';
echo '</p>';
echo '<p>Комментарий<Br>';
echo '<textarea name="comment" cols="40" rows="3"></textarea></p>';
echo '<p><input type="submit" value="Отправить">';
echo '<input type="reset" value="Очистить"></p>';
echo '</form>';

// echo $name . '<br>';
// echo $email . '<br>';
// echo $comment . '<br>';

//Блок вывода комментариев из базы данных
//Готовим sql-запрос
$query = 'SELECT * from myshop.feedback ORDER BY id_feedback DESC';
$feedbackblock = getAssocResult($query);

echo '<hr>';
echo '<pre>';
print_r($feedbackblock);
echo '</pre>';



phpinfo(32);
?>