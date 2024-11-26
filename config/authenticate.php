<?php

	session_start();

	include_once("connection.php");

	include_once("url.php");

	$data = $_POST;

	if ( !isset($data['username'], $data['password']) ) {

		exit('Por favor, preencha os dois campos.');

	}

	$uname = trim($data['username']);
	$pass = password_hash($data['password'], PASSWORD_ARGON2ID);

	try {

		$stmt = $con->prepare('SELECT id, password FROM users WHERE username = ?');
		$stmt->bind_param('s', $uname);
		$stmt->execute();
		$stmt->store_result();
	
		$stmt->close();

	} catch (PDOException $e) {

		error_log("Erro: " . $e->getMessage());
		exit('Um erro ocorreu, tente novamente mais tarde.');
	}

?>