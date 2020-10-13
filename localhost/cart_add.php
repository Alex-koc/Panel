<?php
if(!isset($_COOKIE['cart'])) {
    $_COOKIE['cart'] = '{}';
}
$id = $_GET['id'];

$cart = json_decode($_COOKIE['cart'], true);

$count = $cart[$id] ?? 0;

$cart[$id] = $count+1;

setcookie('cart', json_encode($cart),time() + 60*60*60*60);
header("Location:".$_SERVER['HTTP_REFERER']);