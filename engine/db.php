<?php
//установка соединения с БД
function getConnection(){
    $db = mysqli_connect(HOST, USER, PASS, DB);
    mysqli_query($db, "SET NAMES utf8");
    return $db;
}

//извлечение массива из БД
function getAssocResult($sql)
{
    $db = mysqli_connect(HOST, USER, PASS, DB);
	$result = mysqli_query($db, $sql);
	$array_result = array();
	while($row = mysqli_fetch_assoc($result))
		$array_result[] = $row;

    mysqli_close($db);
	return $array_result;
}

//выполнение запроса к БД
function executeQuery($sql)
{
    $db = mysqli_connect(HOST, USER, PASS, DB);
	$result = mysqli_query($db, $sql);
    mysqli_close($db);
	return $result;
}
?>