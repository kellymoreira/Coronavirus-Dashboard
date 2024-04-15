<?php

/***************************************************************************************************
 * Insere os dados de último acesso ao gráfico de um dos países escolhidos que mostra por estados
 * ao banco de dados 'covid_19' na tabela 'access_records' do MySQL via phpMyAdmin.
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

// Configura o fuso horário e obtém a data e hora atual
$timeZone = new DateTimeZone('America/Sao_Paulo');
$dateTime = (new DateTime('now', $timeZone))->format('Y-m-d H:i:s');

// Prepara a consulta SQL
$sql = "INSERT INTO access_records (
            access_date_time,
            country
        ) 
        VALUES (
            '$dateTime',
            '$country'
        )";

// Executa a consulta SQL e trata os erros
if (mysqli_query($connection, $sql)) {
  // Se a consulta for bem-sucedida, não é necessário fazer nada aqui
} else {
  // Se houver um erro na consulta, imprime a mensagem de erro
  echo "Erro: " . mysqli_error($connection);
}

// Fecha a conexão com o banco de dados
mysqli_close($connection);

?>
