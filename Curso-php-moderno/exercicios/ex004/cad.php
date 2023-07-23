<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <H1>Resultado do processamento</H1>
    </header>
    <main>
        <?php 
            $n = $_GET["nome"];
            $s = $_GET["sobrenome"];
            echo "<p> È um prazer te conhecer,<strong> $n $s</strong>! Este é meu site!";
        ?>
        <a href="javascript:history.go(-1)">Votar para a pagina anterior</a>
    </main>
</body>
</html>