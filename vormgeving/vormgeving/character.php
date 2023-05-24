<?php 
    require "get_alles.php";
    $alleCharacters = getAlles();
    $id = $_GET["id"] - 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - Bowser</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1><?= $alleCharacters[$id]['name']?></h1>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src="resources/images/<?= $alleCharacters[$id]['avatar']?>">
            <div class="stats" style="background-color: <?= $alleCharacters[$id]['color']?>">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?= $alleCharacters[$id]['health']?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?= $alleCharacters[$id]['attack']?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?= $alleCharacters[$id]['defense']?></li>
                </ul>
                <ul class="gear">
                    <li><b>Weapon</b>: <?= $alleCharacters[$id]['weapon']?></li>
                    <?php if ($alleCharacters[$id]['armor'] == NULL): ?>
                        <li></li>
                    <?php else: ?>
                        <li><b>Armor</b>: <?= $alleCharacters[$id]['armor']?></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
                <?= $alleCharacters[$id]['bio']?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<footer>&copy; Reza van Wegberg 2023</footer>
</body>
</html>