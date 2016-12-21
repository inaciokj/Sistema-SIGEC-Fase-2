<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



error_reporting(E_ALL ^ E_DEPRECATED);


    // aceder às sessões
        session_start();


    // para terminar uma sessão, apenas é necessário destruí-la
        session_destroy();
 
    // redirecionar o utilizador para outra página, login.php por exemplo
        header('Location: index.html');

?>   				