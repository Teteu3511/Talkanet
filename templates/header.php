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
		<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
		<link rel="manifest" href="favicon/site.webmanifest">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Syne+Mono&family=Workbench&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Sixtyfour&family=Syne+Mono&family=Workbench&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	</head>

	<body>

		<section class="page-control">

			<section class="header-wrapper">
				<header class="d-flex flex-wrap justify-content-center py-3" id="header">
					<div class="logo">
						<a href="./" class="mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
							<img src="img/Talka.png" width="200px"></img>
						</a>
					</div>
					
					<div class="search-container">
						<form class="w-100 me-4" role="search">
							<input type="search" class="form-control"  id="search-input" name="search" placeholder="Pesquisar..." aria-label="Search">
						</form>
					</div>

					<ul class="nav nav-pills" id="navbar">
						<li class="nav-item"><a href="./" class="nav-link"><span class="text"><i class="fa-solid fa-house"></i>Home</span></a></li>
						<li class="nav-item"><a href="chat.php" class="nav-link"><span class="text"><i class="fa-solid fa-comment-dots"></i>Chat</span></a></li>
						<li class="nav-item"><a href="help.php" class="nav-link"><span class="text"><i class="fa-solid fa-circle-info"></i>Ajuda</span></a></li>
						<li class="nav-item"><a href="login.php" class="nav-link"><span class="text"><i class="fa-solid fa-user"></i>Login</span></a></li>
					</ul>
				
				</header>
			</section>

		