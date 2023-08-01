<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="listaprofessor.css">
  <title>Document</title>
</head>
<body>
  
</body>
</html>

<?php 
  require_once('../conexao.php');
   
  $retorno = $conexao->prepare('SELECT * FROM Professor');
  $retorno->execute();

?>       
        <table> 
            <thead>
                <tr>
                    <th>ID</th>
                  <th>NOME</th>
                    <th>CPF</th>
                    <th>ENDEREÇO</th>
                    <th>DATA DE NASCIMENTO</th>
                    <th>ESTATUS</th>
                   
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>
                            <td> <?php echo $value['id'] ?>   </td> 
                            <td> <?php echo $value['nome']?>  </td> 
                            <td> <?php echo $value['cpf']?> </td> 
                            <td> <?php echo $value['endereco']?> </td> 
                            <td> <?php echo $value['datanascimento']?> </td> 
                           
                            

                            <td>
                               <form method="POST" action="altprofessor.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="alterar"  type="submit">Alterar</button>
                                </form>   
                                

                             </td> 

                             <td>
                               <form method="GET" action="crudprofessor.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="excluir"  type="submit">Excluir</button>
                                </form>

                             </td> 


                       
                      </tr>
                    <?php  }  ?> 
                 </tr>
            </tbody>
        </table>
<?php         
   echo "<button class='button button3'><a href='../index.php'>voltar</a></button>";
?>