<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="altdisciplina.css">
    <title>Document</title>
</head>
<body>

<?php
    require_once('../conexao.php');

   $id = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM Disciplina where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $idprofessor = $array_retorno['idprofessor'];
   $nomedisciplina = $array_retorno['nomedisciplina'];
   $ch= $array_retorno['ch'];
   $semestre = $array_retorno['semestre'];
   


?>

  <form method="POST" action="cruddisciplina.php">
        <input type="num" name="idprofessor" id="" value=<?php echo $idprofessor?> >
                                                
        <input type="text" name="nomedisciplina" id="" value=<?php echo $nomedisciplina ?> >
      
       

        <input type="num" name="ch" id="" value=<?php echo $ch?> >

        <input type="num" name="semestre" id="" value=<?php echo $semestre?> >

       

        
        <input type="submit" name="update" value="Alterar">
  </form>
</body>
</html>