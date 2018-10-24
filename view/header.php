<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compartible" content="IE=edge, chrome=1">
	<title>Dashboard</title>
	<meta name="description" content="">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo BASEURL; ?>css/menu.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
	<style>
		.sidenav {
		    height: 100%;
		    width: 0; 
		    position: fixed;
		    z-index: 1;
		    top: 0;
		    left: 0;
		    background-color: #111;
		    overflow-x: hidden;
		    padding-top: 20px;
		    transition: 0.5s;
		}

		.sidenav a {
		    padding: 8px 8px 8px 20px;
		    text-decoration: none;
		    font-size: 20px;
		    color: #818181;
		    display: block;
		    transition: 0.3s;
		}

		.sidenav a:hover {
		    color: #f1f1f1;
		}

		.sidenav .closebtn {
		    position: absolute;
		    top: 0;
		    right: 25px;
		    font-size: 20px;
		    margin-left: 50px;
		}

		#main {
		    transition: margin-left .5s;
		    padding: 20px;
		}

		@media screen and (max-height: 450px) {
		    .sidenav {padding-top: 10px;}
		    .sidenav a {font-size: 18px;}
		}
	</style>
</head>
<body>
	<div id="menu-lateral" class="sidenav">
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  		<li><a href="<?php echo BASEURL; ?>clientes">Gerenciar Clientes</a></li>
  		<li><a href="<?php echo BASEURL; ?>clientes/add.php">Novo Cliente</a></li>
	</div>
	
	<script>
		function openNav() {
    		document.getElementById("menu-lateral").style.width = "250px";
    		document.getElementById("main").style.marginLeft = "250px";
		}
	
		function closeNav() {
    		document.getElementById("menu-lateral").style.width = "0";
    		document.getElementById("main").style.marginLeft = "0";
		}
	</script>
	<div id="main">
		<nav class="navbar navbar-expand-sm bg-dark container">
  			<ul class="navbar-nav">
    			<li class="nav-item">
      				<a class="btn btn-dark" href="#" onclick="openNav()" >&#9776; Menu</a>
    			</li>
  			</ul>
		</nav>
		<br>
		<main class="container">