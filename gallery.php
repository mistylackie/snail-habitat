<?php
require 'config.php';
require 'vendor/autoload.php';
require 's3-photos.php';
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title><?=$group_name?> Snail Habitat Photo Gallery</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!------ Include the above in your HEAD tag ---------->

		 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
		<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
		<style>
		#demo {
		  height:100%;
		  position:relative;
		  overflow:hidden;
		}

		.green{
		  background-color:#6fb936;
		}
		.thumb{
			margin-bottom: 30px;
		}
		
		.page-top{
			margin-top:85px;
		}
		   
		img.zoom {
			width: 100%;
			height: 200px;
			border-radius:5px;
			object-fit:cover;
			-webkit-transition: all .3s ease-in-out;
			-moz-transition: all .3s ease-in-out;
			-o-transition: all .3s ease-in-out;
			-ms-transition: all .3s ease-in-out;
			filter: contrast(150%)  /* 1.5 contrast */
		}
				
		.transition {
			-webkit-transform: scale(1.2); 
			-moz-transform: scale(1.2);
			-o-transform: scale(1.2);
			transform: scale(1.2);
		}
		.modal-header {
		   
			border-bottom: none;
		}
		.modal-title {
			color:#000;
		}
		.modal-footer{
			display:none;  
		}
		img {
			filter: contrast(120%)  /* 1.5 contrast */
		}
		</style>
	</head>
	<body>
		<!-- Header -->
		<header class="bg-info text-center py-5 mb-4">
		  <div class="container">
			<h1 class="font-weight-light text-white"><?=$group_name?> Snail Habitat Photos</h1>
		  </div>
		</header>

		<div class="container">
			<h2><a href="/" class="btn btn-info"><< Back to all groups</a></h2>
			<div class="row">
				<?php
				$count_pics = 0;
				foreach ($objects['Contents'] as $object){
					$webimage = HOST."/".$object['Key'];
					if( preg_match('/\.(jpg|jpeg|png|gif)(?:[\?\#].*)?$/i', $webimage, $matches) ) {
						$count_pics++;
					?>
					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a href="https://<?=HOST?>/<?=$object['Key']?>?auto=compress&cs=tinysrgb&h=650&w=940" class="fancybox" rel="ligthbox">
							<img src="https://<?=HOST?>/<?=$object['Key']?>?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid habitat-img" alt="">
						   
						</a>
					</div>
				<?php }
				} 
				if ($count_pics === 0) {
					echo '<div class="alert alert-danger" role="alert">No pictures captured yet for this snail habitat. Check back again later.</div>';
				}
				?>
			</div>
		</div>
		<script>
		$(document).ready(function(){
		  $(".fancybox").fancybox({
				openEffect: "none",
				closeEffect: "none"
			});
			
			$(".zoom").hover(function(){
				
				$(this).addClass('transition');
			}, function(){
				
				$(this).removeClass('transition');
			});
		});
    
		</script>
	</body>
</html>