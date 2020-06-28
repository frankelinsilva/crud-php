<?php
//Conexão com banco de dados 
//dbname = nome do banco de dados
//host = local do banco de dados (padrão 'localhost')
//usuário = nome do usuário do banco de dados
//senha = senha do banco de dados
$db_name = 'crud-php';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);

//ler registros do banco de dados
$sql = $pdo->query('SELECT * FROM usuarios');

//conta o número de linhas escritas no banco de dados
//echo "TOTAL: ".$sql->rowCount();

//lista os itens do banco de dados já com associação
$dados = $sql->fetchAll( PDO::FETCH_ASSOC );

//mostra os itens cadastrados no banco de dados
//echo '<pre>';
//print_r($dados);
?>