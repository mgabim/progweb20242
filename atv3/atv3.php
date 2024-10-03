<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade nº3</title>
</head>
<body>
    <?php
    $datetime = new DateTime("now", new DateTimeZone("America/Sao_Paulo"));
    $hora = $datetime->format(H);

    if (0 <= $hora <= 12):
        echo "Bom dia!";
        echo "<img src='' alt='imagem: bom dia!'>";
    elseif (12< $hora <18):
        echo "Boa tarde!";
        echo "<img src='' alt='imagem: boa tarde!'>";
    else:
        echo
    ?>
</body>
</html>