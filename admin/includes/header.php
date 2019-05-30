<?php
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" type="image/png" href="../img/favicon.ico">
    <title>LMS | Admin</title>
	<style type="text/css">
		.material-switch > input[type="checkbox"] {
		display: none;   
	}
	
	.material-switch > label {
		cursor: pointer;
		height: 0px;
		position: relative; 
		width: 40px;  
	}
	
	.material-switch > label::before {
		background: rgb(0, 0, 0);
		box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.5);
		border-radius: 8px;
		content: '';
		height: 16px;
		margin-top: -8px;
		position:absolute;
		opacity: 0.3;
		transition: all 0.4s ease-in-out;
		width: 40px;
	}
	.material-switch > label::after {
		background: rgb(255, 255, 255);
		border-radius: 16px;
		box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
		content: '';
		height: 24px;
		left: -4px;
		margin-top: -8px;
		position: absolute;
		top: -4px;
		transition: all 0.3s ease-in-out;
		width: 24px;
	}
	.material-switch > input[type="checkbox"]:checked + label::before {
		background: inherit;
		opacity: 0.5;
	}
	.material-switch > input[type="checkbox"]:checked + label::after {
		background: inherit;
		left: 20px;
	}
    </style>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">