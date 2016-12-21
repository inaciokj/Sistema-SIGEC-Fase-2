<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//utilização de namespaces 

namespace processaAcesso { 
    
    error_reporting(E_ALL ^ E_DEPRECATED);
    include 'conexao/mysql.php'; 
   // include 'mysql.php'; 
    use Mysql as Mysql;       
    
    class ProcessaAcesso { 
        var $db; 
        
        public function __construct() {     
            $conexao = new Mysql\mysql(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);
           //$conexao = new Mysql\mysql("mysql:host=localhost;dbname=projecto_integrado","root", "");
           // $conexao = new Mysql\mysql ($localhost, $projecto_integrado, "root", "");
            $this->db = $conexao; 
        } 
           
        public function verificaAcesso($id_acesso, $senha) { 
            $select = $this->db->select('utilizador', '*', " where id_acesso = '$id_acesso' and senha = '$senha' "); 
            return $select; 
        } 
        
        public function cadastraUsuario($dados){ 
            $insert = $this->db->insert('utilizador', $dados); 
            return $insert; 
        } 
        
    } 
} 
?>