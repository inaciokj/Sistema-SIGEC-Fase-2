<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


      
try
{
    error_reporting(E_ALL ^ E_DEPRECATED);
    $db = new PDO("mysql:host=localhost;dbname=projecto_integrado;charset=utf8", "root", "kj7", array(PDO::ATTR_PERSISTENT=>TRUE));
    //echo "\nCONEXAO EFECTUADA COM SUCESSO !!!\n"; 
}catch(Exception $e)
{
    echo "\nERRO NA CONEXAO: ".$e->getmessage();        
} 


?>