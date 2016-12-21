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
    $pub = new Publica();
      
    $pub->setTitulo($_POST['titulo']);
    $pub->setAreaConhecimento($_POST['area_conhecimento']);
    $pub->setDescricao($_POST['descricao']);
    $pub->setDefinirGrupo($_POST['definir_grupo']);
    $pub->setAnexo($_POST['anexo']);  
    
    
    $pub->insertIntoDatabase($db);   
    
echo "<br><br>INSERIDO COM SUCESSO!!!<br><br>";

    if($_POST['categoria_publica'] == 1){
        header("Location:artigo_publica.html"); 
    
    } else if ($_POST['categoria_publica'] == 2) { 
        header("Location:duvida_publica.html"); 
    
    } else if ($_POST['categoria_publica'] == 3) { 
        header("Location:sugestao_publica.html");     
}
} 
catch (Exception $exc) 
{
    echo $exc->getMessage();                                
    
}

?>