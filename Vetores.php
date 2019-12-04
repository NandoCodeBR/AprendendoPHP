<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        $arr = [3=>"batata",2=>"limão",5=>"vanana","maça","abacate","espinafre"];
        /*Um array string com a função count para contar o número de elementos no array*/
        $contador = count($arr);
       echo "O array tem $contador elementos <br>";
        print_r($arr);
        /*Array_unshift cria um novo elemento no array, posiciona ele na primeira posição
        E reposiciona todos os outros elementos  */
        array_unshift($arr, "Morango");
        echo "<h1>array_unshift</h1>";
        print_r($arr);
        /*Array_shift deleta o primeiro elemento do array e reposiciona os outros*/
        array_shift($arr);
        echo "<h1>array_shift</h1>";
        print_r($arr);
        /*Array push adiciona um elemento na última posição do array*/
        array_push($arr, "Laranja");
        echo "<h1>array_push</h1>";
        print_r($arr);
        /*Array_pop deleta o último elemento do array*/
        array_pop($arr);
        echo "<h1>array_pop</h1>";
        print_r($arr);
        /*sort ordena todos os elementos em ordem decrescente (No caso de string, as letras maiúsculas vem primeiro)*/
        sort($arr);
        echo "<h1>sort</h1>";
        print_r($arr);
        /*rsort ordena todos os elementos em ordem crescente*/
        rsort($arr);
        echo "<h1>rsort</h1>";
        print_r($arr);
        /*Shuffle ordena todos os elementos de forma aleatória*/
        shuffle($arr);
        echo "<h1>shuffle</h1>";
        print_r($arr);
        /*asort ordena todos os elementos de forma crescente, mas mantém as suas posições*/
        asort($arr);
        echo "<h1>asort</h1>";
        print_r($arr);
        /*arsort ordena todos os elementos de forma decrescente, mas mantém as suas posições*/
        arsort($arr);
        echo "<h1>arsort</h1>";
        print_r($arr);
        /*ksort ordena as posições dos elementos de forma crescente, mas mantém os seus elementos*/
        ksort($arr);
        echo "<h1>ksort</h1>";
        print_r($arr);
        /*krsort ordena as posições dos elementos de forma decrescente, mas mantém os seus elementos*/
        krsort($arr);
        echo "<h1>krsort</h1>";
        print_r($arr);
        
        class Caneta{
            
        }
        ?>
        </pre>
    </body>
</html>
