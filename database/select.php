<?php

require 'config.php';

$connection = mysqli_connect($host, $user, $password, $dbname);


if (!$connection) {
  die("Conexão falhou: " . mysqli_connect_error());
}


$query = sprintf("SELECT * FROM access_records ORDER BY id DESC LIMIT 1,1;");


$dados = mysqli_query($connection, $query);

foreach ($dados as $row) {
  echo 
  "<p class='rodape'>Último país consultado:  " . $row['country'] . "</p>";
  $dataHora = date('d/m/Y H:i:s', strtotime($row['access_date_time']));
  echo "<p class='rodape'>Data e Hora da última consulta:   " . $dataHora . "</p>";
}



mysqli_close($connection);
