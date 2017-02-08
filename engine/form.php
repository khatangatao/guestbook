<?php
if (($_SERVER['REQUEST_METHOD'] == 'POST')
    &&(!empty($_POST['name'])) 
    && (!empty($_POST['email'])) 
    && (!empty($_POST['comment']))) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $query = 
        "INSERT INTO `feedback` (`feedback_body`, `feedback_user`, `email`) 
        VALUES (\"$comment\", \"$name\", \"$email\")";
    executeQuery($query);
}





function setFeedback()
{
    $response = "";
    $db_link = getConnection();

    $feedback_user = mysqli_real_escape_string($db_link, (string)htmlspecialchars(strip_tags($_POST['name'])));
    $feedback_body = mysqli_real_escape_string($db_link, (string)htmlspecialchars(strip_tags($_POST['review'])));

    $sql = "INSERT INTO feedback (feedback_body, feedback_user) VALUES (\"$feedback_body\", \"$feedback_user\")";
    $res = executeQuery($sql, $db_link);

    if(!$res)
        $response = "Произошла ошибка!";
    else
        $response = "Отзыв добавлен";

    return $response;
}

?>