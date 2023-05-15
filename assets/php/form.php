<?php
$text = $_POST['text'];
$newText = str_replace($text, '***', $text);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>

<body>
    <main>
        <div>
            <h2>Paragrafo e Lunghezza</h2>
            <?php echo strlen($text) ?>
        </div>

        <div>
            <h2>Paragrafo Censurato</h2>
            <?php echo ($newText) ?>
        </div>
    </main>
</body>

</html>