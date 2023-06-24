<?php
require_once "config.php";

$idUsuario = $_GET['id'];
$delete = mysqli_query($conexao, "DELETE FROM USUARIO WHERE id = $idUsuario");

if($delete){ 
    $_SESSION['mensagem'] = 'Registro deletado com sucesso!';
    header('Location: http://localhost/trabalho-tenis/crud/read.php');
    mysqli_close($conexao);
  }  

?>