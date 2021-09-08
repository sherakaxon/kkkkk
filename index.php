<?


require_once 'config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>продукты</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
 
<body>
<div class="maket">
    
</div>
<div class="info">
    <div class="container">
    <table class="table-block">
        <tr>
            <th>ID</th>
            <th>заголовок</th>
            <th>описание</th>
            <th>цена</th>
        </tr>

        <?php
        
        
        

        $tovar = mysqli_query($sheet, "SELECT * FROM `products`");

        $tovar = mysqli_fetch_all($tovar); ?>


        <? foreach ($tovar as $task) {
            ?>
                    <tr>
                        <td class="text-td"><?= $task[0] ?></td>
                        <td class="text-td"><?= $task[1] ?></td>
                        <td class="text-td"><?= $task[3] ?></td>
                        <td class="text-td"><?= $task[2] ?>сум</td>
                        <td class="text-td"><a href="product.php?id=<?= $task[0] ?>">комментария</a></td>
                        <td class="text-td"><a href="update.php?id=<?= $task[0] ?>">Обновить</a></td>
                        <td class="text-td"><a style="color: red;" href="vendor/delete.php?id=<?= $task[0] ?>">удалить</a></td>
                    </tr>
                    <tr><? $sum += $task[2]; ?></tr>

                <?php

            }

            ?>
    
            
    </table>
</div> 
<div class="form-box">
            <div class="container">
                <div class="form-block">
                    <h3>добавить новые продукты</h3>
                    <form action="vendor/create.php" method="post">
                        <label>Заголовок</label>
                        <input type="text" name="title">
                        <label>описание</label>
<textarea name="description"></textarea>
<label>цена</label>
<input type="number" name="price"> <br> <br>
<button type="submit">добавить новые продукты
</form></div><p class="ppp">Jami: <?echo $sum?>сум</p>
</div>

</div>




 
    
 <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
