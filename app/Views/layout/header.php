<?php
include_once 'app/php/array.php';
include_once 'app/Models/functions.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GYM</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <section class="bg-dark">
        <div class="d-flex linkas justify-content-end pt-3">
            <?php make_menu($db); ?>
        </div>
    </section>