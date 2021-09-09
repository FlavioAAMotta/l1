<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        CPF: <input type="text" name="cpf"></input><br>
        <input type="submit" value="Validar CPF"></input>
    </form>
</body>
</html>
<?php
    include_once("funcoes.php");
    date_default_timezone_set('America/Sao_Paulo');

    $data = date("d/m/Y H:i:s");
    echo $data ."<br> explodido: ";
    $dia = "09/09/2021";
    $vetor = explode("/", $dia);
    var_dump($vetor);
    echo "<br>implodido: ";
    $texto = implode("-", $vetor);
    echo $texto;

    if(isset($_REQUEST['cpf'])){
        $cpf = $_REQUEST['cpf'];
        if(strlen($cpf) == 14){
            echo "sem retirar: $cpf <br>";
            $cpf = str_replace(".","",$cpf);
            echo "retirando pontos: $cpf <br>";
            $cpf = str_replace("-","",$cpf);
            echo "retirando hifen: $cpf <br>";
            echo "digitos verificadores: " . substr($cpf,9,2);
        }else{
            echo "tamanho invalido";
        }
    }
    
?>