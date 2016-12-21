<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'class/helpers/Db2PhpEntity.class.php';
    include_once 'class/helpers/Db2PhpEntityBase.class.php';
    include_once 'class/helpers/Db2PhpEntityModificationTracking.class.php';
    include_once 'class/helpers/SimpleDatabaseInterface.class.php';
    include_once 'class/helpers/DFCInterface.class.php';
    include_once 'class/helpers/DFC.class.php';
    include_once 'class/helpers/DFCAggregate.class.php';
    include_once 'class/helpers/DSC.class.php';

    include_once 'class/AdministradorModel.class.php';
    include_once 'class/AmigoModel.class.php';
    include_once 'class/AnexoModel.class.php';
    include_once 'class/AmigoModel.class.php';
    include_once 'class/ArtigoModel.class.php';
    include_once 'class/ArtigoHasPublicaModel.class.php';
    include_once 'class/ContaModel.class.php';
    include_once 'class/CriaModel.class.php';
    include_once 'class/DuvidaModel.class.php';
    include_once 'class/DuvidaHasPublicaModel.class.php';
    include_once 'class/FazModel.class.php';
    include_once 'class/FicheiroModel.class.php';
    include_once 'class/GrupoDeEstudoModel.class.php';
    include_once 'class/LoginModel.class.php';
    include_once 'class/MensagemModel.class.php';
    include_once 'class/MensagemHasAnexoModel.class.php';
    include_once 'class/PerfilModel.class.php';
    include_once 'class/PublicaModel.class.php';
    include_once 'class/SugestaoModel.class.php';
    include_once 'class/SugestaoHasPublicaModel.class.php';
    include_once 'class/UtilizadorModel.class.php';
    
    include_once 'config.php';



try {
    $t = new UtilizadorModel();    
    
    $t = &setNumeroIdentificacao($_POST['inscricao']);
    $t = &setNomeCompleto($_POST['nome']);
    $t = &setDataNasc($_POST['data_nasc']);
    $t = &setClasseFrequencia($_POST['frequencia']);
    $t =  &setAreaFormacao($_POST['formacao']);
    $t = &setEndereco($_POST['endereco']);
    $t = &setNumeroTel($_POST['telefone']);
    $t = &setNumeroTelAlter($_POST['telefalt']);
    $t = &setIdAcesso($_POST['id_acesso']);
    $t = &setSenha($_POST['senha']);
    $t = &setCategoria($_POST['categoria']);
    
    
    $t->updateToDatabase($db);
    
    echo "<br>DADOS ATUALIZADOS COM SUCESSO !!!";
    
} catch (Exception $ex) {
    echo $exc->getMessage();
    echo "<br><br><br><a href=index.html>VOLTAR</a>";
    
}