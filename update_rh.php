<?php
//sessao
session_start();
include('verifica_login.php');
//conexao
require_once 'conexao.php';

$ID = mysqli_escape_string($conexao,$_POST["id"]);
$nome = mysqli_escape_String($conexao, $_POST['nome']);
$naturalidade = mysqli_escape_String($conexao, $_POST['naturalidade']);
$dtnasc = mysqli_escape_String($conexao, $_POST['dtnasc']);



$sql = "UPDATE pfunc set NOME = UPPER('$nome'), DTNASC= STR_TO_DATE('$dtnasc', '%d/%m/%Y'), NATURALIDADE= UPPER('$naturalidade') WHERE ID = '{$ID}' ";

    if(mysqli_query($conexao,$sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('location: lista_func_rh.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Atualizar!";
        header('location: lista_func_rh.php');
    endif;
?>
