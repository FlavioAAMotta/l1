<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="arquivos.php">
        <button type="submit">CalculoIMC</button>
    </form>
</body>
</html>

<?php 
    function calculoIMC($altura, $peso){
        $imc = (float)$peso / ((float)$altura * (float)$altura);
        $imc = number_format($imc, 2);
        return $imc;
    }

    function getClassificacao($imc){
        if($imc < 18.5){
            return "abaixo do peso";
        }elseif($imc < 24.9){
            return "peso normal";
        }elseif($imc < 29.9){
            return "sobrepeso";
        }elseif($imc < 34.9){
            return "obesidade 1";
        }elseif($imc < 39.9){
            return "obesidade 2";
        }else{
            return "obesidade 3";
        }
    }

    //Utilizar file para recuperar dados do arquivo
    //For atribuir nome a primeiro indice
    //incrementa o indice e atribui a altura e
    //incrementa o indice e atribui o peso
    //Calculo o imc
    //getClassificacao
    //escrever nome + imc + classificacao em um novo arquivo
    function criaArquivo(){
        $vetor = file("imcs.txt", FILE_IGNORE_NEW_LINES);
        $arquivoNovo = fopen("saida.txt","w");
        for ($i=0; $i < sizeof($vetor); $i++) { 
            $nome = $vetor[$i++];
            $altura = $vetor[$i++];
            $peso = $vetor[$i];
            $imc = calculoIMC($altura, $peso);
            $classificacao = getClassificacao($imc);
            $printIMC = $nome . " " . $imc . " " . $classificacao . "\n";
            fwrite($arquivoNovo, $printIMC);            
        }
        fclose($arquivoNovo);
    }

    $arquivo = "saida.txt";
    if(is_file($arquivo)){
        echo "é um arquivo.";
    }else{
        echo "não é um arquivo.";
    }
?>