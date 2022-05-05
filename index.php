<?php 

$paragrafo = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem doloribus laborum rem sint esse. Tempore nam ratione deleniti blanditiis soluta doloremque rem nihil eos nemo amet. Dolor aspernatur doloribus veritatis?";

$lunghezzaParagrafo = strlen($paragrafo);

$parametroCensura = $_GET['censura'];

$paragrafoCensurato = str_replace("$parametroCensura","***","$paragrafo");

$lunghezzaParagrafoCensurato = strlen($paragrafoCensurato)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad words - php</title>
</head>
<body>
    
    <p>
        Questo è il paragrafo originale:
        <?php echo $paragrafo ?>
    </p>

    <p>
        La lunghezza del paragrafo originale è:
        <?php echo $lunghezzaParagrafo ?>
    </p>

    <form method=GET>
        <input type="text" name="censura">
        <button type="submit">Invia</button>
    </form>

    <p>
        La parola da censurare è:
        <?php echo $parametroCensura ?>
    </p>

    <p>
        Il paragrafo censurato è:
        <?php echo $paragrafoCensurato ?>
    </p>

    <p>
        La lunghezza del paragrafo censurato è:
        <?php echo $lunghezzaParagrafoCensurato ?>
    </p>

</body>
</html>