<?php
// Conectar ao banco de dados
include './db/conexao.php';

if ($conexaoOk)
{
    // Processar o formulário de cadastro
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $profissao = $_POST['profissao'];
    $resumo = $_POST['resumo'];

    // Processar o upload da foto
    $target_dir = "./uploads/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);

    // Inserir os dados no banco de dados
    $sql = "INSERT INTO biografias (nome, idade, profissao, resumo, foto) VALUES ('$nome', '$idade', '$profissao', '$resumo', '$target_file')";

    if ($conn->query($sql) === TRUE) 
    {
        header("Location: index.php");
    } 
    else 
    {
        echo "Erro ao cadastrar a BIO: " . $conn->error;
    }

    $conn->close();
}

?>