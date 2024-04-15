<!DOCTYPE html>

<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Coronavírus Dashboard</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
	<link rel="stylesheet" href="css/fontAwesome.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/milligram.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="icon" href="images/icon.ico">
</head>

<body>

	<div class="navbar">
		<div class="column column-30 col-site-heading">
			<a href="./" class="site-heading float-left">CORONAVÍRUS</a>
			<a href="./"> <img src="images/firula-logo.png" alt="profile photo" class="circle float-left profile-photo" width="27" height="auto"></a>
			<a href="./" class="site-subheading float-left">DASHBOARD</a>
		</div>
	</div>

	<div class="row">
		<section id="main-content" class="column column-offset=100">



			<div class="row grid-responsive">
				<div class="column">
					<div class="card">
						<div class="card-title">
							<h3>Países Disponíveis</h3>
						</div>
						<div class="card-block">

							<?php
							$json = file_get_contents("https://dev.kidopilabs.com.br/exercicio/covid.php?listar_paises=1");
							$data = json_decode($json);
							$countries = array();
							array_push($countries, $data->{9}, $data->{24}, $data->{33});
							?>

							<form id="form-profession" class="selectdiv" method="POST" action="index.php#country">
								<label for="ageRangeField">Qual país você gostaria de obter dados?</label>
								<select id="select-profession" name="country" onchange="enviarFormulario()">
									<option>Selecione</option>
									<?php foreach ($countries as $valor) { ?>
										<option id="variable" name="variable" value=<?php echo $valor ?>><?php echo $valor ?></option>
									<?php } ?>
								</select>
							</form>

						</div>
					</div>
				</div>
			</div>


			<!-- Segunda coluna -->
			<div class="row grid-responsive">
				<div class="column">
					<div class="card">
						<div class="card-title">
							<h3>Dados do País</h3>
						</div>
						<div class="card-block">
							<?php
							include('info/country_data.php');
							?>
						</div>
					</div>
				</div>
			</div>


			<!--Graphic
			<h5>Estados</h5><a class="anchor" name="graphic"></a> -->
			<div class="row grid-responsive">
				<div class="column column-100">
					<div class="card">
						<div class="card-title">
							<h3>Dados por Estado</h3>
						</div>
						<div class="card-block">

							<div class="canvas-wrapper">
								<!-- primeiro gráfico em barras:
								<canvas class="chart" id="bar-chart" height="auto" width="auto"></canvas> -->


								<canvas class="chart" id="line-chart" height="auto" width="auto"></canvas>
















							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Compare
			<h5 class="mt-2">Comparativo</h5><a class="anchor" name="compare"></a> 
			<div class="row grid-responsive">
				<div class="column ">
					<div class="card">

						<?php
						$json = file_get_contents("https://dev.kidopilabs.com.br/exercicio/covid.php?listar_paises=1");
						$data = json_decode($json);
						$countries = array();
						foreach ($data as $key => $value) {
							array_push($countries, $value);
						}
						?>

						
						<div class="card-block">
							<form id="form-profession" class="selectdiv" method="POST" action="pages/compareCountries.php">
								<fieldset>
									<label for="ageRangeField">Selecione o primeiro país</label>
									<select id="select-profession" name="country1">
										<option>Selecione um país</option>
										<?php foreach ($countries as $valor) { ?>
											<option id="variable" name="variable" value=<?php echo $valor ?>><?php echo $valor ?></option>
										<?php } ?>
									</select>
									<label for="ageRangeField">Selecione o segundo país</label>
									<select id="select-profession" name="country2">
										<option>Selecione um país</option>
										<?php foreach ($countries as $valor) { ?>
											<option id="variable" name="variable" value=<?php echo $valor ?>><?php echo $valor ?></option>
										<?php } ?>
									</select>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div> -->

			<a class="anchor" name="about"></a>
			<?php
			require './database/select.php';
			?>

		</section>
	</div>

	<script 
	src="js/chartConfig.js">
	</script>


</body>

</html>