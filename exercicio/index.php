<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /** * 
    * Classe que cria uma pessoa
    * @author ThomasMuller
    * @version 1.0 
    * @copyright GeeG © 2022, Thomas Muller
    * @access public  
    */
        include("Pessoa.php");
        include("Engenheiro.php");
        include("Medico.php");

        /*Pessoa*/

        echo "<h1>Pessoa</h1>";
        $pessoa1 = new Pessoa();
        $pessoa1-> setNome('Thomas Muller');
        $pessoa1-> setDataNascimento('25-08-2004');
        $pessoa1-> setCpf('02072143012');
        $pessoa1-> setRg('3126137839');

        foreach ($pessoa1 as $valor){
            echo "$valor<br>";
        }

        /*Medico*/ 

        echo "<h1>Medico</h1>";
        $medico1 = new Medico();
        $medico1-> setNome('Cristina Muller');
        $medico1-> setDataNascimento('04-03-1965');
        $medico1-> setCpf('42072921015');
        $medico1-> setRg('6529540976');
        $medico1-> setCrm('0000000-0/BR');

        foreach ($medico1 as $valor){
            echo "$valor<br>";
        }

        /*Engenheiro*/

        echo "<h1>Engenheiro</h1>";
        $engenheiro1 = new Engenheiro();
        $engenheiro1-> setNome('Joao Marcos');
        $engenheiro1-> setDataNascimento('15-01-1998');
        $engenheiro1-> setCpf('04678954312');
        $engenheiro1-> setRg('6548906521');
        $engenheiro1-> setCrea('00000000-01');

        foreach ($engenheiro1 as $valor){
            echo "$valor<br>";
        }
    ?>
</body>
</html>