<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saudação</title>
</head>
<body>
    

        <!-- // 1 - Desenvolva um script com mensagens de saudações. Crie uma variável para inserir um horário e a partir do horário realizar 
        // as verificações, se o horário for até as 12 horas, escreva Bom dia, se passar das 12 e for até as 18 horas escreva boa tarde e se passar 
        // das 18 horas até a 0 horas escreva boa noite (if else);


//         2 - Desenvolva um script que recebe duas notas de um aluno. Em seguida deve ser calcular a média do aluno e dar o seguinte resultado:
// A mensagem "Aprovado", se a média alcançada for maior ou igual a seis;
// A mensagem "Reprovado", se a média for menor do que seis;
// A mensagem "Aprovado com Distinção", se a média for igual a dez. (switch case) -->

    
<?php 
  $hora = 12;

  if ($hora > 1 && $hora <=12 ) {

 echo "Bom dia são : $hora";
  }
  else if ($hora >= 12 && $hora <=18) {
    echo "Boa tarde são: $hora";
  }
  else if ($hora == 0 ) {
    echo "Boa noite são: $hora";
  } 

  else if ($hora >= 18 ) {
    echo "Boa noite são: $hora";
  } 
?>
<br>



</body>
</html>