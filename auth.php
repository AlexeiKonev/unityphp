<?php
// Получаем данные от Unity-проекта
$username = $_POST['username'];
$password = $_POST['password'];

// Проверяем, что полученные данные не пусты
if (!empty($username) && !empty($password)) {
    // Здесь можно выполнить проверку данных, например, проверку наличия пользователя в базе данных и соответствия пароля
    // Если проверка успешна, то возвращаем успешный статус в формате JSON
    $response = array("status" => "success", "message" => "Авторизация успешна!");
    echo json_encode($response);
} else {
    // Если полученные данные некорректны, то возвращаем ошибку в формате JSON
    $response = array("status" => "error", "message" => "Ошибка авторизации!");
    echo json_encode($response);
}
?>
