<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadaluno.css">
    
    <title>Document</title>
</head>
<body>
  
  <div class="conteudo">
     <div class="form-image">
          <img src="cadastro.jpg" alt="">
     </div>
     <div class="form">
          <div class="form-header">
     <div class="title">
          <h1>Cadastre-se<h1>
               
     </div>
  <form method="GET" action="crudprofessor.php">
     <div class="input-group">
          <div class="input-box">
     <label for="">Nome: </label><br>
     <input type="text" name="nome" placeholder="digite seu nome"><br>
     <label for="">Cpf:</label><br>
     <input type="text" name="cpf" placeholder="xxx.xxx.xxx-xx"><br>
     <label for="">Endereço:</label><br>
     <input type="text" name="endereco" placeholder="digite seu endereco"> <br>
     <label for="">Data de Nascimento:</label><br>
     <input type="date" name="datanascimento"><br>
<br>
<div class="estatus-inputs">
     <div class="input-title">
          <h6>Estatus:<h6>
     </div>
     <div class="estatus-group">
          <div class="estatus-input">
               <input type="radio" id="" name="estatus">
               <label for="">Ativo</label>
          </div>
          
          <div class="estatus-input">
               <input type="radio" id="" name="estatus">
               <label for="">Inativo</label>
          </div>
     </div>
</div>

<input type="submit" name="cadastrar" value="cadastrar">


     <button class="button"><a href="index.php">voltar</a></button>
     
          </div>
     </div>
   
</div>
</div>
</div>






    



</body>
</html>