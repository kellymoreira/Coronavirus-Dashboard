<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coronavirus Dashboard</title>
</head>

<body>

  <?php

  /*******************************************************************************************************
   * Verifica se os dados foram enviados via método POST. Se sim, obtém o país selecionado do formulário,
   * caso contrário, define o país padrão como Brasil.
   *******************************************************************************************************/

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $country = $_POST['country'];
  } else {
    $country = 'Brazil';
  }

  // URL da API para obter os dados do COVID-19
  $url = 'https://dev.kidopilabs.com.br/exercicio/covid.php?pais=';
  $completeUrl = $url . $country;

  // Obtém os dados JSON da API
  $json = file_get_contents($completeUrl);
  $data = json_decode($json);
  $numberKeys = count(get_object_vars($data));
  $countries = array();
  $totalDeaths = 0;
  $totalConfirmed = 0;

  // Loop para processar os dados recebidos da API
  for ($counter = 0; $counter < $numberKeys; $counter++) {
    array_push($countries, $data->{$counter});
    $totalDeaths = $totalDeaths + $data->{$counter}->Mortos;
    $totalConfirmed = $totalConfirmed + $data->{$counter}->Confirmados;
  };

  // Inclui o arquivo para inserção dos dados no banco de dados
  require './database/insert.php';

  ?>

  <!-- Exibição dos dados do país selecionado -->
  <session>
    <h3 class="country-name"><?php echo $country ?></h3>
    <p class="confirmed-cases-number"><?php echo number_format($totalConfirmed, 0, ',', '.') ?></p>
    <p class="confirmed-label cases">CASOS CONFIRMADOS</p>
    <p class="confirmed-deaths-number"><?php echo number_format($totalDeaths, 0, ',', '.') ?></p>
    <p class="confirmed-label deaths">ÓBITOS CONFIRMADOS</p>
  </session>

  <!--
  <session>
    <?php
      // Loop para iterar sobre os dados de cada estado do país selecionado
     foreach ($countries as $valor) { 
    ?>
      <?php 
      echo 'Estado: ', $valor->ProvinciaEstado 
      ?>
      <?php 
      echo 'Casos confirmados: ', $valor->Confirmados 
      ?>

      <?php 
      echo 'Óbitos: ', $valor->Mortos 
      ?>
    <?php 
    } ?>
  </session>
  -->

  <script>
    // Processamento dos dados para o gráfico
    var statesTotal = "<?php
                        foreach ($countries as $valor) {
                          echo $valor->ProvinciaEstado, "-";
                        }
                        ?>";
    var states = statesTotal.split("-");
    states.pop();

    var confirmedTotal = "<?php
                          foreach ($countries as $valor) {
                            echo $valor->Confirmados, "-";
                          }
                          ?>";
    var confirmedString = confirmedTotal.split("-");
    confirmedString.pop();
    let confirmed = confirmedString.map(Number);

    var deathTotal = "<?php
                      foreach ($countries as $valor) {
                        echo $valor->Mortos, "-";
                      }
                      ?>";
    var deathString = deathTotal.split("-");
    deathString.pop();
    let death = deathString.map(Number);
  </script>

  <!-- Inclusão do script do Chart.js -->
  <script src="javascript/chart.min.js"></script>

  <!-- Inclusão do script com os dados para o gráfico -->
  <script src="javascript/chartData.js"></script>

</body>

</html>
