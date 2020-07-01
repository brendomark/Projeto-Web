<?php
//sessao
session_start();
include('verifica_login.php');
//conexao
require_once 'conexao.php';

//if(isset($_POST['btn-deletar']));

$ID = mysqli_escape_String($conexao, $_GET['id']);


$sql = "DELETE FROM pfunc WHERE ID = '$ID'";
$sql2 = "DELETE FROM PPESSOA WHERE ID = '$ID'";



    if(mysqli_query($conexao,$sql)):
        mysqli_query($conexao,$sql2);
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('location: lista_func_rh.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Deletar!";
        header('location: lista_func_rh.php');
    endif;
?>
