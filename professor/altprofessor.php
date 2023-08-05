<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="altprofessor.css">
    <title>Document</title>
</head>
<body>

<?php
    require_once('../conexao.php');

   $id = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM professor where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nome = $array_retorno['nome'];
   $cpf = $array_retorno['cpf'];
   $endereco = $array_retorno['endereco'];
   $datanascimento = $array_retorno['datanascimento'];
   $estatus = $array_retorno['estatus'];


?>
<h1>ALTERAR PROFESSOR </h1> 
  <form method="POST" action="crudprofessor.php">
  <label for="">Nome:</label><br>
        <input type="text" name="nome" id="" value=<?php echo $nome?> >
        
        <label for="">CPF:</label><br>                                    
        <input type="cpf" name="cpf" id="" value=<?php echo $cpf ?> >
      

        <label for="">Id:</label><br>
        <input type="hidden" name="id" id="" value=<?php echo $id ?> >
        
        <label for="">Endereço:</label><br>
        <input type="text" name="endereco" id="" value=<?php echo $endereco?> >
       
        <label for="">Data de Nascimento:</label><br>
        <input type="date" name="datanascimento" id="" value=<?php echo $datanascimento?> >
       

       

        
        <input type="submit" name="update" value="Alterar">
  </form>
</body>
</html>