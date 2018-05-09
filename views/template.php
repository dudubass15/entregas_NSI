<!doctype html>
<html lang="PT">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../../../favicon.ico">

	<title>NSI - Controle de Acesso</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo URL; ?>/assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="<?php echo URL; ?>/assets/css/dashboard.css" rel="stylesheet">
</head>

<body>
	<div class="topo">
		<div class="topo">
			<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
				<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">NSI - Controle de Entregas</a>
				<input class="form-control form-control-dark w-100" type="text" placeholder="Buscar" aria-label="Search">
				<ul class="navbar-nav px-3">
					<li class="nav-item text-nowrap">
						
					</li>
				</ul>
			</nav>
			<div class="container-fluid">
				<div class="row">
					<nav class="col-md-2 d-none d-md-block bg-light sidebar">
						<div class="sidebar-sticky">
							<ul class="nav flex-column">
								<li class="nav-item">
									<a class="nav-link active" href="<?php echo URL; ?>/home">
										<span data-feather="home"></span>
										Painel <span class="sr-only">(current)</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link active" href="<?php echo URL; ?>/home/add">
										<span data-feather="file-text"></span>
										Novo
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link active" href="<?php echo URL; ?>/home/geral">
										<span data-feather="settings"></span>
										Relatório Geral
									</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>

			<div class="">
				<?php $this->loadViewInTemplate($viewName, $viewData); ?>
			</div>
			<div class="rodape">
			<!-- Bootstrap core JavaScript
				================================================== -->
				<!-- Placed at the end of the document so the pages load faster -->
				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
				<script>window.jQuery || document.write('<script src="<?php echo URL; ?>/assets/js/jquery-3.3.1.min.js"><\/script>')</script>
				<script src="<?php echo URL; ?>/assets/js/popper.min.js"></script>
				<script src="<?php echo URL; ?>/assets/js/bootstrap.min.js"></script>

				<!-- Icons -->
				<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
				<script>
					feather.replace()
				</script>

				<!-- Graphs -->
				<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
				<script>
					var ctx = document.getElementById("myChart");
					var myChart = new Chart(ctx, {
						type: 'line',
						data: {
							labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
							datasets: [{
								data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
								lineTension: 0,
								backgroundColor: 'transparent',
								borderColor: '#007bff',
								borderWidth: 4,
								pointBackgroundColor: '#007bff'
							}]
						},
						options: {
							scales: {
								yAxes: [{
									ticks: {
										beginAtZero: false
									}
								}]
							},
							legend: {
								display: false,
							}
						}
					});
				</script>
			</div>
		</body>
		</html>