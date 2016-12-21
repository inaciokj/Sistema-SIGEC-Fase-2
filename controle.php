<?php 

//utilização de namespaces 

namespace controle; 
//error_reporting(E_ALL ^ E_DEPRECATED);
include 'processaAcesso.php'; 
//include 'index.html'; 
//include 'cadastrar.php'; 
//include 'paginas/paginas1.html';
//include 'paginas/paginas2.html';
use processaAcesso as processaAcesso;   
$controle = new \processaAcesso\ProcessaAcesso; 



if (isset($_POST['entrar'])) { 
//if ($_POST['entrar']) { 
    //echo 'Estou dentro, humm, acho que ... !!!';
    //echo base64_decode('id_acesso');
    //echo base64_decode(md5('senha'));
    
    //echo $_POST['id_acesso'];
    //echo $_POST['senha'];
    
    
    
    $id_acesso = $_POST['id_acesso']; 
    $senha = $_POST['senha']; 
    $usuario = $controle->verificaAcesso($id_acesso, $senha); 

//redirecionando para pagina conforme o tipo do usuário 
if ($usuario[0]['categoria'] == 1) { 
    header("Location:utilizador.html"); 
    
} else if ($usuario[0]['categoria'] == 2) { 
    header("Location:administrador.html"); 
    
} else if ($usuario[0]['categoria'] == 3) { 
    header("Location:gestor.html"); 
    
} else if ($usuario[0]['categoria'] == 4) { 
    header("Location:administrativo.html"); 
    
} else if ($usuario[0]['categoria'] == 5) { 
    header("Location:funcionario.html"); 
    
} else if ($usuario[0]['categoria'] == 6) { 
    header("Location:docente.html"); 
    
} else if ($usuario[0]['categoria'] == 7) { 
    header("Location:estudante.html"); 
}   
 

} else if (isset ($_POST['cadastrar'])) {
    $numero_identificacao = $_POST['inscricao'];
    $nome_completo = $_POST['nome'];     
    $data_nasc =  $_POST['data_nasc'];
    $classe_frequencia = $_POST['frequencia'];
    $area_formacao =  $_POST['formacao'];
    $endereco =  $_POST['endereco'];
    $numero_tel = $_POST['telefone'];
    $numero_tel_alter = $_POST['telefalt'];
    $id_acesso = $_POST['id_acesso']; 
    $senha = $_POST['senha'];   
    $categoria = $_POST['categoria'];         
    //$foto = $_POST['foto']; 
    $arr = array('numero_identificacao' => $numero_identificacao, 'nome_completo' =>  $nome_completo,  'data_nasc' =>  $data_nasc, 'classe_frequencia' =>  $classe_frequencia, 'area_formacao' =>  $area_formacao, 'endereco' =>  $endereco, 'numero_tel' => $numero_tel, 'numero_tel_alter' => $numero_tel_alter, 'id_acesso' => $id_acesso, 'senha' => $senha, 'categoria' => $categoria); 
    
    if (!$controle->cadastraUsuario($arr)) { 
        echo 'Aconteceu algum erro Cadastrando este Utiliador !!!!!';    
        
    } else { 
        $tipo_acesso = $controle->verificaAcesso($id_acesso, $senha); 
        
        if ($tipo_acesso[0]['categoria'] == 1) { 
            header("Location:utilizador.html"); 
            
        } else if ($tipo_acesso[0]['categoria'] == 2) { 
            header("Location:administrador.html"); 
            
        } else if ($tipo_acesso[0]['categoria'] == 3) { 
            header("Location:gestor.html"); 
    
        } else if ($tipo_acesso[0]['categoria'] == 4) { 
            header("Location:administrativo.html");    
    
        } else if ($tipo_acesso[0]['categoria'] == 5) { 
            header("Location:funcionario.html"); 
    
        } else if ($tipo_acesso[0]['categoria'] == 6) { 
            header("Location:docente.html"); 
    
        } else if ($tipo_acesso[0]['categoria'] == 7) { 
            header("Location:estudante.html"); 
        }   
    }         
} 
?>