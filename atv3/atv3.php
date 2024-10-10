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
    $hora = $datetime->format(format: 'H');

    if (0 <= $hora && $hora<= 12):
        echo "<h1>Bom dia!</h1>";
        echo "<img src='https://i.pinimg.com/564x/e6/50/9a/e6509af6c70a95cfbe06d7628380b181.jpg' alt='imagem: bom dia!'>";
    elseif (12< $hora && $hora<18):
        echo "<h1>Boa tarde!</h1>";
        echo "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZeJ3DPIVG0m-IVyc0NSU_NhcPFAs_ceal1w&s' alt='imagem: boa tarde!'>";
    elseif (18<= $hora && $hora<=24):
        echo "<h1>Boa noite!</h1>";
        echo "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXeoBYwRGJyp-w1Ys22zkJZ2OAc_9L9OH4nw&s' alt='imagem: boa noite!'>";
    endif;
    ?>
</body>
</html>