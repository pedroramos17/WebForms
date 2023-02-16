<?php
session_start();

require_once 'controller.php';

if(isset($_POST['btn-cadastrar'])){
    $nome = mysqli_escape_string($connection,$_POST['nome']);
    $sobrenome = mysqli_escape_string($connection,$_POST['sobrenome']);
    $email = mysqli_escape_string($connection,$_POST['email']);
    $idade = mysqli_escape_string($connection,$_POST['idade']);

    $sql = "INSERT INTO tbClientes(nomeCli,sobrenomeCli,emailCli,idadeCli)VALUES('$nome','$sobrenome','$email','$idade')";
}

if(mysqli_query($connection, $sql)){
    $_SESSION['mensagem'] = "Erro ao cadastrar.";

    header('Location: ../index.php');
}
else{
    $_SESSION['mensagem'] = "Erro ao cadastrar.";

    header('Location: ../index.php');
}