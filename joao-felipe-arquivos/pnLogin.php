<?php include('conexao.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form>   
        
        <h1>logue se aqui</h1>
        <p>
          login   
           <input type="text" name="login" id="login" > 
        </p>
        
        <p>
            Senha
            <input type="password" name="senha" id="senha">
        </p>

            <button onclick="verificarLogin()"> logar </button>
        
    </form>
    
</body>

<script>

    function ()verificarLogin

    let login = document.getElementById('login').value;
    let Senha = document.getElementById('senha').value;

    window.open(`pgInicial.php?login=${login}&Senha=${senha}`);

</script>
</html>