<?php $username = "John"; ?>
<?php $games = ["Counterstrike","Call of Duty","Battlefield"] ?>
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Goedemorgen, <?php echo $username ?></h1>
<h2>Games</h2>
<?php foreach ($games as $game): ?>
<li><?php echo $game ?></li>
<?php endforeach; ?>


</body>
</html>%
