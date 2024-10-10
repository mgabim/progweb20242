<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade nº4</title>
    <style>
        html{
            margin: 5px;
        }
        table, th, td{
            border: 1px solid black;
            width: 30%;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>relatório de clientes</h1>
    <?php
    $pessoa1 = array("codigo" => 1, "nome" => "amanda");
    $pessoa2 = array("codigo" => 2, "nome" => "beatriz");
    $pessoa3 = array("codigo" => 3, "nome" => "carol");
    $pessoa4 = array("codigo" => 4, "nome" => "daria");
    $pessoa5 = array("codigo" => 5, "nome" => "ester");
    $lista['pessoa'][] = $pessoa1;
    $lista['pessoa'][] = $pessoa2;
    $lista['pessoa'][] = $pessoa3;
    $lista['pessoa'][] = $pessoa4;
    $lista['pessoa'][] = $pessoa5;

    foreach($lista as $listapessoas) {
    ?>
    <table>
        <tr>
            <th>codigo</th>
            <th>nome</th>
        </tr>
        <?php foreach($listapessoas as $itempessoa => $valuepessoa) { ?>
        <tr>
            <?php foreach($valuepessoa as $item => $value){
                echo "<td> $value </td>";
            } ?>
        </tr>
        <?php } ?>
    </table>
    <?php } ?>
</body>
</html>