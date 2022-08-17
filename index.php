<?php
    echo "meu nome e jony";
    echo "<h1> FUNÇÃO NATIVA </h1>";
    echo "<br>";
    echo "bem vindo";

    echo "<h4></h4>";
    $nota1 = 7.5;
    $nota2 = 8;
    $texto = "Minha média :";
    $resultado = ($nota1 + $nota2)/2;

    $texto = $texto.$resultado;
    echo $texto;

    if($resultado >= 6)
    {
        echo " Aprovado";
    }
    else if($resultado < 6 && $resultado >= 2)
    {
        echo " Tem como recuperar";
    }
    else{
        echo " Reprovado";
    }

    $contadora = 0;
    do{
        echo "<br>teste".$contadora;
        $contadora ++;
    }while($contadora < 10);

    echo "<br>while:<br>";
    while($contadora < 150)
    {
    if($contadora % 2 ==0){
        echo $contadora." É número par<br>";
    }else{
        echo $contadora." É númeiro impar<br><br>";
    }
    $contadora++;
    }
    echo "<table border='5'>";
    for($i=0; $i < 25 ; $i++) {
        echo "<tr>";
        echo "<td>Nome".$i."</td>";
        echo "<td>idade".$i."</td>";
        echo "</tr>";
    }
    echo "</table>"
?>   

