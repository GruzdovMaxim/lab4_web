<?php
	session_start();
	$page = $_GET['page'];
		if ($page === null){
			$page = 'main';
	}
	$page = trim($page, "\/' $%&#@!\"");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Black Continent-Home</title>
		<meta name="veiwport" content="width=device-width">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins&family=Work+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/header-footer.css">
	</head>
</html>
<?php 
	require "header.php";
	require $page.'.php';
	require "footer.php";
?>