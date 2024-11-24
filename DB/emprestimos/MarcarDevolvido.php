<?php
include('../../seguranca/seguranca.php');
session_start();
if(administrador_logado() == false) {header("location: /index.php"); exit;}

require_once("../../conexao/conexao.php");

$testeIDEMPRESTIMO = campo_e_valido("txtIDEMPRESTIMO", "ID");
if ($testeIDEMPRESTIMO[0] == false) { exit; }
$txtIDEMPRESTIMO = $testeIDEMPRESTIMO[1];


try {
    $comando = $conexao->prepare(
        "UPDATE EMPRESTIMO
            SET STATUS_LIVRO = 'DEVOLVIDO'
            WHERE ID = :txtIDEMPRESTIMO;"
    );

    $comando->execute(array(
        ':txtIDEMPRESTIMO' => $txtIDEMPRESTIMO
    ));


    if($comando->rowCount() > 0)
    {
        header('location:/views/emprestimos/visualizar.php');
    }
    else
    {
        echo "Erro ao gravar os dados";
    }

} catch (PDOException $e) {
    echo("Erro ao gravar informação no banco de dados. \n\n".$e->getMessage());
}

$conexao = null;
