

<?php

//error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(0);
$user = "sigec"; $pass = "kj7"; $name = "XE"; $host = "inacio";

//NÃO ALTERE NADA DESTE LINHA, NEM MESMO ESPAÇOS
$tns = " (DESCRIPTION =(ADDRESS_LIST =(ADDRESS = (PROTOCOL = TCP) (HOST = ".$host.")(PORT = 1521)))(CONNECT_DATA = (SID = ".$name.")))";

try
{
$oracle = new PDO("oci:dbname=".$tns,$user,$pass);
echo 'conectado -> '.date('H:i:s');

echo '<br><br>RES<br><br>';

foreach($oracle->query('Select nome_completo From utilizador') as $row) 
{
    print_r($row);
}

}catch(PDOExceptiosn $e)
{
    echo ($e->getMessage());
}

?>

