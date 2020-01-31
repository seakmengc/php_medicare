<!doctype html>
<html lang="en">
<head>
    <?php
        define('TITLE', 'HOME');
        include('template/header.php');
    ?>
</head>
<body>
    <?php include('template/navbar.html') ?>
    
    <?php include __DIR__ . '/php/home/sec_1.php'; ?>
    <?php include 'php/home/sec_2.php'; ?>
    <?php include 'php/home/sec_3.php'; ?>
    <?php include 'php/home/sec_4.php'; ?>

    <?php 
    
        for($i = 0; $i < 10; ++$i) {
            $title = $i + 1;
            include __DIR__.'/template/doctor_card.php';
        }
    ?>

    <?php include ('template/footer.html') ?>
</body>
</html>

