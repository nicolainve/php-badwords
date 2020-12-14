<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>

</head>

<body>

    <?php
    $text = 'ciao ciao ciao come va la vita';
    $badword = $_GET['badword'];
    ?>

    <p><?php echo $text ?></p>

    <p><?php echo strlen($text) ?></p>


    <a href="./?badword=ciao">Attiva il filtro</a>
    <a href="./?badword=***">Disattiva il filtro</a>
    
    <p><?php echo str_replace($badword, '***', $text) ?></p>
    <p><?php echo str_replace('***', $badword, $text) ?></p>
    
</body>
</html>