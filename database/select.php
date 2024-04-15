<?php

/***************************************************************************************************
 * Recupera e exibe informações sobre o último acesso registrado no sistema de monitoramento 
 * COVID-19 no banco de dados 'covid_19' na tabela 'access_records' do MySQL.
 ***************************************************************************************************/

// Inclui o arquivo de configuração que contém informações de conexão com o banco de dados
require 'config.php';

// Conecta ao banco de dados MySQL utilizando as informações do arquivo de configuração
$connection = mysqli_connect($host, $user, $password, $dbname);

// Verifica se a conexão foi estabelecida com sucesso
if (!$connection) {
  // Se a conexão falhar, encerra o script e exibe uma mensagem de erro
  die("Conexão falhou: " . mysqli_connect_error());
}

// Constrói a consulta SQL para selecionar o segundo registro mais recente da tabela 'access_records'
$query = sprintf(
  "SELECT * 
  FROM access_records 
  ORDER BY id DESC LIMIT 
  1,1;"
);

// Executa a consulta SQL no banco de dados
$dados = mysqli_query($connection, $query);

// Itera sobre os resultados da consulta
foreach ($dados as $row) {
  echo
  // Exibe o país consultado
  "<p class='rodape'>Último país consultado:  " . $row['country'] . "</p>";
  // Formata a data e hora da última consulta para um formato legível
  $dataHora = date('d/m/Y H:i:s', strtotime($row['access_date_time']));
  // Exibe a data e hora da última consulta
  echo "<p class='rodape'>Data e Hora da última consulta:   " . $dataHora . "</p>";
}

// Fecha a conexão com o banco de dados para liberar recursos
mysqli_close($connection);

?>
