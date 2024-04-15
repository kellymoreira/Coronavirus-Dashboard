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

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $country = $_POST['country'];
  } else {
    $country = 'Brazil';
  }

  $url = 'https://dev.kidopilabs.com.br/exercicio/covid.php?pais=';
  $completeUrl = $url . $country;
  $json = file_get_contents($completeUrl);
  $data = json_decode($json);
  $numberKeys = count(get_object_vars($data));
  $countries = array();
  $totalDeaths = 0;
  $totalConfirmed = 0;

  for ($counter = 0; $counter < $numberKeys; $counter++) {
    array_push($countries, $data->{$counter});
    $totalDeaths = $totalDeaths + $data->{$counter}->Mortos;
    $totalConfirmed = $totalConfirmed + $data->{$counter}->Confirmados;
  };

  require './database/insert.php';

  ?>



  <session>
    <h3 class="country-name"><?php echo $country ?></h3>
    <p class="confirmed-cases-number"><?php echo number_format($totalConfirmed, 0, ',', '.') ?></p>
    <p class="confirmed-label cases">CASOS CONFIRMADOS</p>
    <p class="confirmed-deaths-number"><?php echo number_format($totalDeaths, 0, ',', '.') ?></p>
    <p class="confirmed-label deaths">ÓBITOS CONFIRMADOS</p>
  </session>






  <!--
  <session>
    <?php foreach ($countries as $valor) { ?>
      <h5><?php echo 'Estado: ', $valor->ProvinciaEstado ?></h5>
      <p><h6><?php echo 'Casos confirmados: ', $valor->Confirmados ?></h6></p>
      <p><h6><?php echo 'Óbitos: ', $valor->Mortos ?></h6></p>
    <?php } ?>
  </session>
  -->

  <script>
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

  <script src="js/chart.min.js">
  </script>

  <script src="js/chartData.js">
  </script>

</body>

</html>