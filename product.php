<?php

    

    require_once 'config/connect.php';
    

    

    $boots_id = $_GET['id'];


    $task = mysqli_query($sheet, "SELECT * FROM `products` WHERE `id` = '$boots_id'");

    

    $task = mysqli_fetch_assoc($task);

   

    $kament = mysqli_query($sheet, "SELECT * FROM `comments` WHERE `product_id` = '$boots_id'");

    
    $kament = mysqli_fetch_all($kament);
?>

<!doctype html>
<html lang="en">
<head>
    <title>продукты</title>
</head>
<body>
    <h2>заголовок: <?= $task['title'] ?></h2>
    <h4>цена: <?=$task['price'] ?></h4>
    <p>описание: <?= $task['description'] ?></p>

    <hr>

    <h3>добавить комментарии</h3>
    <form action="vendor/create_comment.php" method="post">
        <input type="hidden" name="id" value="<?= $task['id'] ?>">
        <textarea name="body"></textarea> <br><br>
        <button type="submit">добавить комментарии</button>
    </form>

    <hr>

    <h3>коментария</h3>
    <ul>
        <?php

           

            foreach ($kament as $sheet) {
            ?>
                <li><?= $sheet[2] ?></li>
            <?php
            }
        ?>
    </ul>
</body>
</html>