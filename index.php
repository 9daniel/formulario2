<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    
    <title>CRUD- Clientes</title>
</head>
<body>
    <h1>Cadastro de novos clientes</h1>

    <?php
        if(isset($_SESSION['msg']))
        echo $_SESSION['msg'];
        unset ($_SESSION['msg']);
    ?>
    
    <form method="POST" action="processar.php">

            <label>Nome: </label>
            <input type="text" name="nome" placeholder="Digite o nome completo">
            <br><br>
        
            <label>Sobrenome: </label>
            <input type="text" name="sobrenome" placeholder="Digite seu sobrenome">
            <br><br>    
        
            <label>Email: </label>
            <input type="email" name="email" placeholder="Digite seu E-mail">
            <br><br>    

            <label>Empresa: </label>
            <input type="text" name="empresa" placeholder="Digite o nome da empresa">
            <br><br>    
        
            <label>Telefone: </label>
            <input type="text" name="telefone" placeholder="Digite seu número">
            <br><br>
  
            <label>Senha: </label>
            <input type="password" name="senha" placeholder="Digite sua senha">
            <br><br>
        
            <!--Botão para enviar os dados-->
            <input type="submit" value="Enviar">
            <br><br>    
    </form>
    
</body>
</html>