<?php

	include_once("config/url.php");
	include_once("config/process.php");

	if(isset($_SESSION['msg'])) {

		$printMsg = $_SESSION['msg'];

		$_SESSION['msg'] = '';

	}

?>

<!DOCTYPE html>
<html lang="pt-BR">

	<head>

		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Talkanet - Seu Lugar para Trovar</title>
        <link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	</head>

	<body>

		<section class="page-control">

			<section class="header-wrapper">
				<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom" id="header">
					<a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
						<span class="fs-4" id="header-title">Talkanet</span>
					</a>
					
					<div class="search-container">
						<form class="w-100 me-5" role="search">
							<input type="search" class="form-control"  id="search-input" name="search-input" placeholder="Pesquisar..." aria-label="Search">
						</form>
					</div>

					<ul class="nav nav-pills" id="navbar">
						<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="add_post.php" class="nav-link">Postar</a></li>
						<li class="nav-item"><a href="help.php" class="nav-link">Ajuda</a></li>
						<li class="nav-item"><a href="aboutus.php" class="nav-link">Sobre nós</a></li>
					</ul>
				
				</header>
			</section>