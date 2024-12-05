<?php

	include_once("config/url.php");
	include_once("config/process.php");

	if(isset($_SESSION['msg'])) {

		$printMsg = $_SESSION['msg'];

		$_SESSION['msg'] = '';

	}

?>

<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="dark">

	<head>

		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Talkanet - Seu Lugar para Trovar</title>
        <link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	</head>

	<body>

		<section class="page-control">

			<section class="header-wrapper">
				<header class="d-flex flex-wrap justify-content-center py-3" id="header">
					<div class="logo">
						<a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
							<img src="img/Talka.png" width="200px"></img>
						</a>
					</div>
					
					<div class="search-container">
						<form class="w-100 me-4" role="search">
							<input type="search" class="form-control"  id="search-input" name="query" placeholder="Pesquisar..." aria-label="Search">
						</form>
					</div>

					<ul class="nav nav-pills" id="navbar">
						<li class="nav-item"><a href="index.php" class="nav-link"><span class="text"><i class="fa-solid fa-house"></i>Home</span></a></li>
						<li class="nav-item"><a href="help.php" class="nav-link"><span class="text"><i class="fa-solid fa-circle-info"></i>Ajuda</span></a></li>
					</ul>
				
				</header>
			</section>