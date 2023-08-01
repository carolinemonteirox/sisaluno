<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="caddisciplina.css">
    
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
  <form method="GET" action="cruddisciplina.php">
     <div class="input-group">
          <div class="input-box">
     <label for="">Id Professor: </label><br>
     <input type="num" name="idprofessor" placeholder="digite seu id"><br>
     <label for="">Nome Disciplina:</label><br>
     <input type="text" name="nomedisciplina" placeholder="digite o nome da disciplina"><br>
     <label for="">Carga Horária:</label><br>
     <input type="num" name="ch" placeholder="digite sua carga horaria"> <br>
     <label for="">Semestre:</label><br>
     <input type="num" name="semestre"><br>
<br>

     
          
          
     </div>
</div>

<input type="submit" name="cadastrar" value="cadastrar">


     <button class="button"><a href="../index.php">voltar</a></button>
     
          </div>
     </div>
   
</div>
</div>
</div>






    



</body>
</html>