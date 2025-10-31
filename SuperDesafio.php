<?php 
require 'MostrarSuperDesafio.php';
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>SuperDesafio</title>
</head>
<body>
     <form method="POST" action="MostrarSuperDesafio.php">
<label for="">Digite um Nome:</label>
     <input type="text" name="nome">
     <br>
     <br>
     <label for="">Informe seu Email:</label>
     <input type="email" name="email" id="">
<br>
<br>
     <label for="">Selecione a Escolaridade:</label>

     <?php foreach ($escolaridades as $escolaridade) {?>
          <br>
          <input type="radio" name="escolaridade" id="" value="<?php echo $escolaridade; ?>"> 
          <label for=""> <?php echo $escolaridade; ?> </label> 
    <?php } ?>


<br>
<br>
     <label for="">Selecione a(s) sua(s) Disciplinas:</label>

     <?php foreach ($disciplinas as $disciplina)  {?>
          
          <input type="checkbox" name="disciplina[]" id="" value="<?php echo $disciplina; ?>"> 
          <label for=""> <?php echo $disciplina; ?> </label> 
    <?php } ?>
    <br>
    <br>

    <label for="">Escolha sua Cidade: </label>
    <select name="cidade" id="">

     <?php foreach ($cidades as $cidade)  {?>
          <option value="<?php echo $cidade; ?>"><?php echo $cidade; ?></option>

   <?php  }?>

    </select>
    <br>
    <input type="submit" value="Enviar">

     </form>
</body>
</html>

