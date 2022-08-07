<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tik-Tac</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h3>Крестики-нолики</h3>
<h4 class="score"></h4>
<div class="container">
    <div class="play_table">
        <?php
        for ($i = 1; $i <= 9; $i++) {
            ?>
            <button class="tictac" id="<?= $i ?>"></button>
            <?php
        }
        ?>
    </div>
</div>
<div class="container">
    <div class="save_score">
        <h4>Сохранить счет</h4>
        <div>
            <input id="name" type="text" name="name" placeholder="Введите имя">
            <button id="send">Сохранить</button>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="script.js"></script>
</body>
</html>