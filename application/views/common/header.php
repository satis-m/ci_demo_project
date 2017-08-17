<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="Demo Project Apexcollege" name="description"/>
	<meta content="Satish Maharjan (satish.maharjan55@gmail.com)" name="author"/>

	<title>Document</title>
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="<?= site_url('assets');?>/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="<?= site_url('assets');?>/css/style.css">
</head>
<body>

		<nav>
		    <div class="nav-wrapper">
		      <a href="<?= site_url('login'); ?>" class="brand-logo">Logo</a>
		      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		      <ul class="right hide-on-med-and-down">
		        <li><a href="<?= site_url('pages/about'); ?>">About</a></li>
		      </ul>
		      <ul class="side-nav" id="mobile-demo">
		        <li><a href="<?= site_url('pages/about'); ?>">About</a></li>
		      </ul>
		    </div>
		  </nav>

	<div class="container">