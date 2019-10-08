<?php

session_start();
include_once("conexao.php");

$nome      = filter_input(INPUT_POST, 'nome',      FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
$email     = filter_input(INPUT_POST, 'email',     FILTER_SANITIZE_STRING);
$empresa   = filter_input(INPUT_POST, 'empresa',   FILTER_SANITIZE_STRING);
$telefone  = filter_input(INPUT_POST, 'telefone',  FILTER_SANITIZE_STRING);
$senha     = filter_input(INPUT_POST, 'senha',     FILTER_SANITIZE_STRING);

// Sò para fazer teste para ver se tava funcionando !!
//echo "Nome: $nome";
//echo "<br>";

//echo "Sobrenome: $sobrenome";
//echo "<br>";

//echo "Email: $email";
//echo "<br>";

//echo "Empresa: $empresa";
//echo "<br>";

//echo "Telefone: $telefone";
//echo "<br>";

//echo "Senha: $senha";
//echo "<br>";
//Fim teste

$result_usuario = "INSERT INTO cliente (nome, sobrenome, email,empresa, telefone, senha, created) values ('$nome','$sobrenome','$email','$empresa','$telefone','$senha', now())";
$resultado_usuario = mysqli_query($conn, $result_usuario);


if(mysqli_insert_id($conn)){

    $_SESSION['msg'] = "<p style='color:green;'> Usuário cadastrado com sucesso</p>";
    //header vai voltar para a pagina inicial
    header("Location: index.php");
}

// se não retorna, não foi cadastrado
else{
    $_SESSION['msg'] = "<p style='color:red;'> Usuário não foi cadastrado</p>";
    //header vai voltar para a pagina inicial
    header("Location: index.php");
}

?>