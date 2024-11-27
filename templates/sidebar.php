<?php

	include_once("config/url.php");

?>

<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="dark">

	<head>

		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Talkanet</title>
        <link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	</head>

	<body>

		<section class="wrapper">
			<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;" id="sidebar">
				<a href="index.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
				<svg class="bi pe-none me-2" width="50" height="42"><use xlink:href="#bootstrap"></use></svg>
				<span class="fs-3" id="sidebar-header">Talkanet</span>
				</a>
				<hr>
				<ul class="nav nav-pills flex-column mb-auto">
				<li class="nav-item" id="home">
					<a href="index.html" class="nav-link active" aria-current="page">
					<svg class="bi pe-none me-2" width="25" height="25"><use xlink:href="#home"></use></svg>
					Home
					</a>
				</li>
				<li>
					<a href="sdjidsjk.html" class="nav-link text-white">
					<svg class="bi pe-none me-2" width="25" height="25"><use xlink:href="#speedometer2"></use></svg>
					Postar
					</a>
				</li>
				<li>
					<a href="#" class="nav-link text-white">
					<svg class="bi pe-none me-2" width="25" height="25"><use xlink:href="#table"></use></svg>
					Ajuda
					</a>
				</li>
				<li>
					<a href="#" class="nav-link text-white">
					<svg class="bi pe-none me-2" width="25" height="25"><use xlink:href="#grid"></use></svg>
					Sobre Nós
					</a>
				</li>
				</ul>
				<hr>
			</div>