<?php
/*********************************************************************************************************
 * esse arquivo PHP insere os dados de último acesso (gráfico de um dos países escolhidos por estado) 
 * e insere ao banco de dados 'covid_19' na tabela 'access_records' do MySQL via phpMyAdmin.
 ********************************************************************************************************/
  require 'config.php';

  //$conn = mysqli_connect($host, $user, $password, $dbname);

  $connection = mysqli_connect($host, $user, $password, $dbname);


  //if (!$conn) {
    if (!$connection) {
    die("Conexão falhou: " . mysqli_connect_error());
  }

  $timeZone = new DateTimeZone('America/Sao_Paulo');
  $dateTime = (new DateTime('now', $timeZone))->format('Y-m-d H:i:s');


  $sql = "INSERT INTO access_records (access_date_time, country) VALUES ('$dateTime', '$country')";

  //if (mysqli_query($conn, $sql)) {
  if (mysqli_query($connection, $sql)) {

    //echo "Dados inseridos com sucesso!";
  } else {
    //echo "Erro: " . mysqli_error($conn);
    echo "Erro: " . mysqli_error($connection);
  }

  //mysqli_close($conn);
  mysqli_close($connection);


?>