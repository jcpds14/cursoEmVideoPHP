<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado desafio 1</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <main>
        <h1>Resultado desafio 1</h1>
    </main>
    <section>
        <?php 
            $num = $_POST["numero"];
            $numPred = $_POST["numero"] - 1;
            $numSuce = $_POST["numero"] + 1;

            echo "O número digitado é <strong>$num</strong>";
            echo "<br>";
            echo "O predecessor dele é <strong>$numPred</strong>";
            echo "<br>";
            echo "O sucessor dele é <strong>$numSuce</strong>";
            
        ?>
    </section>
</body>

</html>