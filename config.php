<?php

$dbHost = 'Localhost';
$dbUsername = 'Luan';
$dbPassword = 'scanner';
$dbName = 'saphirmedbd';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($conexao -> connect_errno);
{
echo "erro de conexão"
}
else
{
echo "Conexão efetuada com sucesso"
}

?>