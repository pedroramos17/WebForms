<?php
session_start();

require_once 'controller.php';

if(isset($_POST['btn-cadastrar'])){
    $nome = mysqli_escape_string($connection,$_POST['FName']);
    $cargo = mysqli_escape_string($connection,$_POST['FCargo']);
    $dataEntregaCargo = mysqli_escape_string($connection,$_POST['FDataEntradaCargo']);
    $anosNaEmpresa = mysqli_escape_string($connection,$_POST['FAnosNaEmpresa']);
    $setor = mysqli_escape_string($connection,$_POST['FSetor']);
    $salario = mysqli_escape_string($connection,$_POST['FSalario']);

    $sql = "INSERT INTO tbClientes(nomeCli,sobrenomeCli,emailCli,idadeCli)VALUES('$nome','$cargo','$dataEntregaCargo','$anosNaEmpresa''$setor','$salario')";
}

if(mysqli_query($connection, $sql)){
    $_SESSION['mensagem'] = "Erro ao cadastrar.";

    header('Location: ../index.php');
}
else{
    $_SESSION['mensagem'] = "Erro ao cadastrar.";

    header('Location: ../index.php');
}