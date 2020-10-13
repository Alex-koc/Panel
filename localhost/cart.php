<?php
require_once 'mysql.php';
require_once 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Блог</title>
    <style>
        .login {
            width: 620px;
        }
    </style>
</head>
<body>

<section class="container">
    <div class="login">
        <h1>Корзина</h1>
        <?php
        echo '<pre>';
        $cart_json = $_COOKIE['cart'];
        $cart = json_decode($_COOKIE['cart'],true);
        foreach ($cart as $id => $count){
            $pdo->query('SELECT *  FROM `product` WHERE id='.$id)
        }



        $stmt = $pdo->query('SELECT *  FROM `product`');
        echo "<table><tr><th>№</th><th>Название</th><th>Описание</th><th>Фото</th></tr>";
        while ($row = $stmt->fetch())
        {
            echo "<tr>";
            echo '<td>'.$row['idR'].'</td>';
            echo '<td><a href="comments.php?id='.$row['id'].'">'.$row['name'].'</a></td>';
            echo '<td>'.$row['text'].'</td>';
            echo '<td><img src="images/'.$row['photo'].'" alt="Здесь должна быть картинка" width="150" height="150"></td>';
            echo "</tr>";

        }
        ?>
        </table>
        <br>
    </div>
</section>
</body>
</html>
