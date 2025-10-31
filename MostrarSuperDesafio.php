<?php 

$escolaridades = ['1º Ano','2º Ano','3º Ano'];
$disciplinas = ['Português', 'Matemática', 'Biologia', 'Filosofia', 'Física', 'Química'];
$cidades = [' ','São Paulo','Brasília', 'Minas Gerais', 'Rio de Janeiro'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
     if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['escolaridade']) && !empty($_POST['disciplina']) && !empty($_POST['cidade']) && $_POST['cidade'] != ' '){
          $nome= $_POST['nome'];
          $email= $_POST['email'];
          $escolaridade= $_POST['escolaridade'];
          $disciplinas= $_POST['disciplina'];
          $cidade= $_POST['cidade'];
          
          echo nl2br("Seu nome é: $nome\n");
          echo nl2br("Email: $email\n");
          echo nl2br("Sua Escolaridade é: $escolaridade\n");
          echo nl2br("Você escolheu a(s) disciplina(s): ");
          foreach ($disciplinas as $disciplina) {
             echo" $disciplina ";
          }
          
          echo nl2br("\nVocê é da cidade: $cidade");
          
          }else{
               echo"Preencha todos os campos";
          }
}


?>
