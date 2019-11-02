<?php
require 'config.php';
require 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Snail Habitats</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<style>
			.paragraph {padding-bottom: 20px}
			.students {padding-bottom: 10px}			
			.alert-light {background-color: #f7f5f5; border-color: #dcdada}
			p, div {color: #6f7171}
			h2 {color: #17a2b8}
			.card-title {
				margin-top: -10px;
				padding-bottom: 10px;
			}
		</style>
	</head>
	<body>
		<!-- Header -->
		<header class="bg-info text-center py-5 mb-4">
		  <div class="container">
			<h1 class="font-weight-light text-white">Snail Habitats</h1>
		  </div>
		</header>

		<!-- Page Content -->
		<div class="container">
		<div class="alert alert-light" role="alert">
		  These are student created snail habitats. Each habitat has a Raspberry Pi computer with a mini camera attached to it, which is programmed to take a snapshot photo every hour. This will allow students to see where the snails are hanging out the most and improve their habitats over time.
		</div>
		<h2 class="text-center">Snail Habitat Groups</h2>
		<p class="text-center paragraph">Click on a group picture below to view a history of snapshot photos</p>
		  <div class="row">
			<!-- Team Member 1 -->
			<div class="col-xl-4 col-md-6 mb-4">
			  <div class="card border-0 shadow">
				<a href="gallery/group1/"><img src="images/snail-habitat-group1.jpg" class="card-img-top" alt="Spidey Ninja Snail Habitat (Group 1)"></a>
				<div class="card-body text-center">
				  <h5 class="card-title mb-0">Dark Cave Snails</h5>
				  <div class="card-text text-black-50 students">
					<div class="row">
						<div class="col-xl-6 col-md-6 col-sm-12">Student Name</div>
						<div class="col-xl-6 col-md-6 col-sm-12">Student Name</div>
					</div>
					<div class="row">
						<div class="col-xl-6 col-md-6 col-sm-12">Olivia</div>
						<div class="col-xl-6 col-md-6 col-sm-12">Brooke</div>
					</div>
				  </div>
				  <a class="btn btn-info" href="gallery/group1/" role="button">View Photos</a>
				</div>
			  </div>
			</div>
			<!-- Team Member 2 -->
			<div class="col-xl-4 col-md-6 mb-4">
			  <div class="card border-0 shadow">
				<a href="gallery/group2/"><img src="images/snail-habitat-group2.jpg" class="card-img-top" alt="Sparke Snails Habitat (Group 2)"></a>
				<div class="card-body text-center">
				  <h5 class="card-title mb-0">Sparkle Snails</h5>
				  <div class="card-text text-black-50 students">
					<div class="row">
						<div class="col-xl-4 col-md-4 col-sm-12">Brooklyn</div>
						<div class="col-xl-4 col-md-4 col-sm-12">Gracie</div>
						<div class="col-xl-4 col-md-4 col-sm-12">Jayla</div>
					</div>
					<div class="row">
						<div class="col-xl-4 col-md-4 col-sm-12">Eliya</div>
						<div class="col-xl-4 col-md-4 col-sm-12">Lilly</div>
						<div class="col-xl-4 col-md-4 col-sm-12"></div>
					</div>
				  </div>
				  <a class="btn btn-info" href="gallery/group2/" role="button">View Photos</a>
				</div>
			  </div>
			</div>
			<!-- Team Member 3 -->
			<div class="col-xl-4 col-md-6 mb-4">
			  <div class="card border-0 shadow">
				<a href="gallery/group3/"><img src="images/snail-habitat-group3.jpg" class="card-img-top" alt="Snail Jail Snail Habitat (Group 3)"></a>
				<div class="card-body text-center">
				  <h5 class="card-title mb-0">Snail Jail</h5>
				  <div class="card-text text-black-50 students">
					<div class="row">
						<div class="col-xl-6 col-md-6 col-sm-12">Sol</div>
						<div class="col-xl-6 col-md-6 col-sm-12">Mathias</div>
					</div>
					<div class="row">
						<div class="col-xl-6 col-md-6 col-sm-12">Orion</div>
						<div class="col-xl-6 col-md-6 col-sm-12">Kailea</div>
					</div>
				  </div>
				  <a class="btn btn-info" href="gallery/group3/" role="button">View Photos</a>
				</div>
			  </div>
			</div>
		</div>
		  <!-- /.row -->
		  
		  <div class="row">
			<!-- Team Member 4 -->
			<div class="col-xl-4 col-md-6 mb-4">
			  <div class="card border-0 shadow">
				<a href="gallery/group4/"><img src="images/snail-habitat-group4.jpg" class="card-img-top" alt="Rainbow Dinosaur Snails (Group 4)"></a>
				<div class="card-body text-center">
				  <h5 class="card-title mb-0">Rainbow Dinosaur Snails</h5>
				  <div class="card-text text-black-50 students">
					<div class="row">
						<div class="col-xl-4 col-md-4 col-sm-12">Eddie</div>
						<div class="col-xl-4 col-md-4 col-sm-12">Amara</div>
						<div class="col-xl-4 col-md-4 col-sm-12">Trinity</div>
					</div>
					<div class="row">
						<div class="col-xl-4 col-md-4 col-sm-12">Madeleine</div>
						<div class="col-xl-4 col-md-4 col-sm-12">Declan</div>
					</div>
				  </div>
				  <a class="btn btn-info" href="gallery/group4/" role="button">View Photos</a>
				</div>
			  </div>
			</div>
			<!-- Team Member 5 -->
			<div class="col-xl-4 col-md-6 mb-4">
			  <div class="card border-0 shadow">
				<a href="gallery/group5/"><img src="images/snail-habitat-group5.jpg" class="card-img-top" alt="Chicken World Snail Habitat (Group 5)"></a>
				<div class="card-body text-center">
				  <h5 class="card-title mb-0">Chicken World</h5>
				  <div class="card-text text-black-50 students">
					<div class="row">
						<div class="col-xl-6 col-md-6 col-sm-12">Parker</div>
						<div class="col-xl-6 col-md-6 col-sm-12">Silas</div>
					</div>
					<div class="row">
						<div class="col-xl-6 col-md-6 col-sm-12">Sammy</div>
						<div class="col-xl-6 col-md-6 col-sm-12">Toby</div>
					</div>
				  </div>
				  <a class="btn btn-info" href="gallery/group5/" role="button">View Photos</a>
				</div>
			  </div>
			</div>
			<!-- Team Member Misty -->
			<div class="col-xl-4 col-md-6 mb-4">
			<div class="card border-0 shadow">
				<a href="gallery/group6/"><img src="images/snail-habitat.jpg" class="card-img-top" alt="Misty's Snail Habitat"></a>
				<div class="card-body text-center">
				  <h5 class="card-title mb-0">Misty's Snail Habitat</h5>
				  <div class="card-text text-black-50 students">I will be running all kinds of experiments on my own habitat I have at my home.</div>
				  <a class="btn btn-info" href="gallery/group6/" role="button">View Photos</a>
				</div>
			  </div>
			</div>
		  </div>
		  <!-- /.row -->
		  
		  <div class="alert alert-secondary" role="alert">
		  Project Created By: <a href="https://www.mistylackie.com/" target="_blank">Misty Lackie</a>
		  <br>
		  I plan to open source this project at github so others can download the full source code and documentation for building their own snail habitat. Check back soon for full documentation and source code.
		</div>

		</div>
		<!-- /.container -->

	</body>
</html>
