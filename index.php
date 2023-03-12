<?php

$nome = 'Valter Bonfim';
$sobrenome = 'Silva';
$idade = 26;
$numero = 20;
$mediaIdade = 30;

//echo  $idade .'<br/>';
echo $nome . ' ' . $sobrenome . ' e a sua idade é ' .$idade;

$total = $idade + $numero;
echo '<p>' . $total;

//Tomada de Decisão IF/Else e Else IF

if ($idade > $mediaIdade){
    echo ' <p> Idade Maior que 30';
}else if ($idade == 40 )  {
    echo ' <p> Idade igual a 40 anos <p>';
}else{
    echo ' <p> Idade não é maior que ' . $mediaIdade . ' e também não igual a 27 anos.<p>';
}

// Laço de Repetição 
 for($i=0;$i <= 5; $i++){
    if($i == 3){
        echo '<p> Contador é 3 <p>' .$i;
    }
    echo'<br /> o valor de i é ' . $i;
 }



?>