<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Bootstrap linki -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="static/css/theme.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
	
	<title>CI TestaApp {title}</title>
	
</head>
<body>
	<div class="navbar navbar-inverse navbar-static-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="/" class="navabar-brand"></a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav_zg">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>	
				</button>
			</div>
			<div class="collapse navbar-collapse" id="nav_zg">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url();?>">Domov</a></li>
					<li><a href="<?php echo base_url("about");?>">About</a></li>
					<li><a href="<?php echo base_url("users");?>">Users</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="page-header">
					<h1 >{main_heading}</h1>
				</div>
			</div>
		</div>

	
