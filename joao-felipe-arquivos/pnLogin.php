<?php include('conexao.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <style>
        ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: black;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

body {
    background-color: black;
}

h1 {
    color: white;
}

p {
    color: white;
}
</style>

</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
    </style>

    <?php
        $sql = "SELECT * FROM tb_usuarios";
        $resultUsuarios = $mysqli->query($sql);
    ?>


    <form>   
        
        <h1>cadastre se aqui</h1>
        <p>
          nome de Usuario      
           <input type="text" name="nomeUsuario" > 
        </p>
        
        <p>
            endereço completo
            <input type="text" name="endereço">
        </p>

            <button onclick="pgInicial()"> logar </button>
        
    </form>

    <footer>
      nosso sistema foi desenvolvido para a explicação de um site e um codigo feito em php e no banco de dados  
    <footer>

</body>
</html>