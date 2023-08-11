<?php
// Conectar ao banco de dados
include './db/conexao.php';

if ($conexaoOk)
{

    $id = $_GET['id'];

    // Obter o nome da foto antes de excluir o registro
    $sql_select = "SELECT foto FROM biografias WHERE id = $id";
    $result_select = $conn->query($sql_select);
    if ($result_select->num_rows > 0) 
    {
        $row = $result_select->fetch_assoc();
        $foto_path = $row["foto"];

        // Excluir o arquivo de foto da pasta uploads
        if (!unlink($foto_path)) 
        {
            echo "Erro ao excluir a foto.";
        }

         // Excluir o item do banco de dados
         $sql = "DELETE FROM biografias WHERE id = $id";

         if ($conn->query($sql) === TRUE) 
         {
             header("Location: index.php");
         } 
         else 
         {
             echo "Erro ao excluir o registro: " . $conn->error;
         }
    } 
    else 
    {
        echo "Registro não encontrado.";
    }
    // $sql = "DELETE FROM biografias WHERE id=" . $id;
    // $result = $conn->query($sql);


    // if ($conn->query($sql) === TRUE) 
    // {
    //     header("Location: index.php");
    // } 
    // else 
    // {
    //     echo "Erro ao cadastrar a BIO: " . $conn->error;
    // }

    // $conn->close();
}
?>