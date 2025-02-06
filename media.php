<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'header.php'; ?>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="css/normalize.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {  // Wait for the DOM to be ready
            jQuery("#status").fadeOut(3000);  // Fade out loading animation
            jQuery("#preloader").delay(1000).fadeOut("slow");  // Fade out preloader
        });
    </script>
	<style>
	#id03{
		text-decoration: underline;
		}

	.container{
		border-style: inherit;
	}
	iframe{
		display: block;
		margin-left: auto;
		margin-right: auto;
		padding-bottom: 20px;
	}
	hr { 
		display: block;
		margin-left: auto;
		margin-right: auto;
		} 
	#demo-content {
		padding-top: 100px;
		}
	
	<!--Responsive Screen-->
	@media only screen and (min-width: 640px) {
		iframe{
			height:169px; 
			width:300px;
		}
	}
	@media only screen and (min-width: 960px) {
		iframe{
			height:236px; 
			width:420px;
		}
	}	
	@media only screen and (min-width: 1440px) {
		iframe{
			height:320px; 
			width:640px;
		}
	}
	@media only screen and (min-width: 2000px) {
		iframe{
			height:640px; 
			width:800px;
		}
    }
	@media only screen and (max-device-width: 479px) {
		iframe{
			padding:10px;
			height:144px; 
			width:100%;
		}
    }
	
	<!--PRELOADER-->
	#preloader {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: 99;
	}
	#status {
		display: block;
		position: absolute;
		left: 50%;
		top: 50%;
		width: 150px;
		height: 150px;
		margin: -75px 0 0 -75px;
		border-radius: 50%;
		border: 3px solid transparent;
		border-top-color: #3498db;
		-webkit-animation: spin 2s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
		animation: spin 2s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */
	}

	#status:before {
		content: "";
		position: absolute;
		top: 5px;
		left: 5px;
		right: 5px;
		bottom: 5px;
		border-radius: 50%;
		border: 3px solid transparent;
		border-top-color: #e74c3c;
		-webkit-animation: spin 3s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
		animation: spin 3s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */
    }
	#status:after {
		content: "";
		position: absolute;
		top: 15px;
		left: 15px;
		right: 15px;
		bottom: 15px;
		border-radius: 50%;
		border: 3px solid transparent;
		border-top-color: #f9c922;
		-webkit-animation: spin 1.5s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
		animation: spin 1.5s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */
    }
	
    @-webkit-keyframes spin {
        0%   { 
            -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(0deg);  /* IE 9 */
            transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */
        }
        100% {
            -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(360deg);  /* IE 9 */
            transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */
        }
    }
    @keyframes spin {
        0%   { 
            -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(0deg);  /* IE 9 */
            transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */
        }
        100% {
            -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(360deg);  /* IE 9 */
            transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */
        }
    }


	</style>
<head>
	<div id="preloader">
		<div id="status"></div>
	</div>
<body>
	<?php include_once 'navbar.php'; ?>
	<div id="demo-content">
		<div class="container">
			<iframe  width="320" height="180" src="https://www.youtube.com/embed/e7bt4QIWxOc" gesture="media" allow="encrypted-media" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			
			<iframe  width="320" height="180" src="https://www.youtube.com/embed/aKMgLNo0VM8" gesture="media" allow="encrypted-media" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			
			<iframe  width="320" height="180" src="https://www.youtube.com/embed/ntbjDZePQ-g" gesture="media" allow="encrypted-media" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
								
			<iframe  width="320" height="180" src="https://www.youtube.com/embed/Thnu22ztPVo" gesture="media" allow="encrypted-media" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
								
			<iframe  width="320" height="180" src="https://www.youtube.com/embed/Doc8RmkOloI" gesture="media" allow="encrypted-media" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				
			<iframe  width="320" height="180" src="https://www.youtube.com/embed/165O8DuITMw" gesture="media" allow="encrypted-media" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
								
		</div>
	</div>
</body>
</html>
 