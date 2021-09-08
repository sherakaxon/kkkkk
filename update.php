<?php

    

    require_once 'config/connect.php';

  

    $boots_id = $_GET['id'];

    

    $task = mysqli_query($sheet, "SELECT * FROM `products` WHERE `id` = '$boots_id'");

    

    $task = mysqli_fetch_assoc($task);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>обновить продукты</title>
</head>
<body>
    <h3>обновить продукты</h3>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $task['id'] ?>">
        <p>заголовок</p>
        <input type="text" name="title" value="<?= $task['title'] ?>">
        <p>описание</p>
        <textarea name="description"><?= $task['description'] ?></textarea>
        <p>цена</p>
        <input type="number" name="price" value="<?= $task['price'] ?>"> <br> <br>
        <button type="submit">обновить</button>
    </form>
</body>
</html>