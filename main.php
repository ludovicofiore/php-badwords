<?php

$text = $_POST['testo'];

$word = $_POST['parola'];

$modified_text = str_replace($word, '***', $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina di atterraggio</title>
</head>
<body>

<div>
    <h3>Testo originale</h3>
    <p>
        <?php echo $text ?>
    </p>

    <h3>
        Lunghezza testo
    </h3>

    <h4>
        <?php echo strlen($text) ?> 
    </h4>
</div>


<div>
    <h3>Testo modificato</h3>
    <p>
        <?php echo $modified_text ?>
    </p>

    <h3>Lunghezza testo modificato</h3>
    <h4>
        <?php echo strlen($modified_text) ?> 
    </h4>
</div>


    
</body>
</html>