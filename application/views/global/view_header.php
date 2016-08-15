<!DOCTYPE html>
<html>
	<head>
		<title>Welcome to e-Recruitment Administrator</title>
	</head>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery-confirm.min.css">
	<style>
		@font-face {
			font-family: GeosansLight;
			src: url('<?php echo base_url();?>/assets/fonts/GeosansLight.ttf');
		}
		
		h3{
			font-family:GeosansLight;
			color:#fff;
			font-size:2em;
			font-weight:normal;
			margin:0 auto;
			float:left;
		}
		
		.options{
			background-color:transparent;
			transition:all 0.3s ease-out;
		}
		
		.options:hover, .options ul li:hover{
			background-color:#364150;
			transition:all 0.3s ease-in;
			cursor:pointer;
		}
		
		.options:hover .sub{
			display:block;
			transition:all 0.3s ease-in;
		}
		
		.options ul li ul li:hover{
			background-color:#f1f1f1;
			transition:all 0.3s ease-in;
			cursor:pointer;
		}
		
		.options ul li ul{
			position:absolute;
			background-color:#fff;
			width:150px;
			margin-left:-3%;
			margin-top:18px;
			border:1px solid #f1f1f1;
			display:none;
			transition:all 0.3s ease-out;
			z-index:99;
		}
		
		.options ul li ul li{
			padding:5px 0px;
			padding:10px 20px;
		}
		
		.bell{
			background-color:transparent;
			transition:all 0.3s ease-out;
		}
		
		.bell:hover, .bell ul li:hover{
			background-color:#364150;
			transition:all 0.3s ease-in;
			cursor:pointer;
		}
		
		.bell:hover .sub{
			display:block;
			transition:all 0.3s ease-in;
		}
		
		.bell ul li ul li:hover{
			background-color:#f1f1f1;
			transition:all 0.3s ease-in;
			cursor:pointer;
		}
		
		.bell ul li ul{
			position:absolute;
			background-color:#fff;
			width:150px;
			margin-left:-7%;
			margin-top:18px;
			border:1px solid #f1f1f1;
			display:none;
			transition:all 0.3s ease-out;
			z-index:99;
		}
		
		.bell ul li ul li{
			padding:5px 0px;
			padding:10px 20px;
		}
	
	</style>
	<body style="overflow:hidden">
		<div style="background-color:#ddd;width:100%;height:100%;top:0;left:0;position:absolute;">