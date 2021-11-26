<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>
		<?php echo $titulo ?>
	</title>
	<link href="http://fonts.gogleapi.com/css?family=Roboto:400,100,300,500,700" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
		integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
		crossorigin="anonymous"></script>

</head>

<style>

	#dropdownMenuLink {
		color: #fff;
		background-color: #343a40 !important;
		margin-left: 1450%;
	}

</style>

<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
			<a class="navbar-brand" id="titulo" href="<?php echo base_url(''); ?>">Leadster</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
				aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="dropdown">
				<a class="btn " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
					aria-expanded="false">
					Álbum
				</a>

				<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					<a class="nav-link active" href="<?php echo base_url(''); ?>"> Home <span class="sr-only">(current)</span></a>
					<a class="nav-link active" href="<?php echo base_url('pagina/fotos'); ?>"> Fotos <span class="sr-only">(current)</span></a>
				</div>
			</div>
		</nav>

	</header>