<!DOCTYPE html>
<html lang="en">
<head>
	<title>Denis Kovačević</title>
	<?php include_once 'header.php'; ?>
<style>
body{
    padding-top: 60px;
	}
i{ 
	font-style: italic;
	}	
p{
	font-family: 'Libre Baskerville', serif;
	color:white;
	margin-left: 40px;
	margin-top: 40px;
	font-size: 18px;
	line-height: 1.6;
	text-align: justify;
	}
.clearfix {
	overflow: auto;
	}
.img1{
	float: right;
	margin-left: 30px;
	margin-right:30px;
	margin-top:40px;
	margin-bottom: 20px;
	max-width: 100%;
	height: auto;
	border-radius: 25px;
	box-shadow: 10px 10px 18px #888888;
	-moz-box-shadow: 10px 10px 18px #888888;
	-webkit-box-shadow: 10px 10px 18px #888888;
	-khtml-box-shadow: 10px 10px 18px #888888;
	}
.img2{
	display: none;
	float: right;
	margin-left: 25px;
	margin-right:25px;
	margin-top:35px;
	margin-bottom: 15px;
	max-width: 100%;
	height: auto;
	border-radius: 20px;
	box-shadow: 10px 10px 18px #888888;
	-moz-box-shadow: 10px 10px 18px #888888;
	-webkit-box-shadow: 10px 10px 18px #888888;
	-khtml-box-shadow: 10px 10px 18px #888888;
	}
.img3{
	display: none;
	float: right;
	margin-left: 20px;
	margin-right:20px;
	margin-top:30px;
	margin-bottom: 20px;
	max-width: 100%;
	height: auto;
	border-radius: 25px;
	box-shadow: 10px 10px 18px #888888;
	-moz-box-shadow: 10px 10px 18px #888888;
	-webkit-box-shadow: 10px 10px 18px #888888;
	-khtml-box-shadow: 10px 10px 18px #888888;
}
.img4{
	display: none;
	float: right;
	margin-left: 15px;
	margin-right:15px;
	margin-top:20px;
	margin-bottom: 15px;
	max-width: 100%;
	height: auto;
	border-radius: 25px;
	box-shadow: 10px 10px 18px #888888;
	-moz-box-shadow: 10px 10px 18px #888888;
	-webkit-box-shadow: 10px 10px 18px #888888;
	-khtml-box-shadow: 10px 10px 18px #888888;
}

<!--Responsive image sizes and fonts for different Devices-->
@media screen and (min-width: 992px) {
	.font_change {
		font-size: 18px;
		margin-right: 15px;
		}
	}
@media screen and (max-width: 991px) {
	.font_change {
		font-size: 16px;
		margin-right: 15px;
		}
	.img1{
		display: none;
		}
	.img2{
		display: block;
		}
	.img3{
		display: none;
		}
	.img4{
		display: none;
		}
	}
@media screen and (max-width: 767px) {
	.font_change {
		font-size: 14px;
		margin-right: 12px;
		margin-left: 20px;
		}
	.img1{
		display: none;
		}
	.img2{
		display: none;
		}
	.img3{
		display: block;
		}
	.img4{
		display: none;
		}
	}
@media screen and (max-width: 479px) {
	.font_change {
		font-size: 13px;
		margin-right: 10px;
		margin-left: 15px;
		}
	.img1{
		display: none;
		}
	.img2{
		display: none;
		}
	.img3{
		display: none;
		}
	.img4{
		display: block;
		}
	}	
</style>
</head>
<body>
	<?php include_once 'navbar.php'; ?>
	<div class="clearfix">
		<picture>
			<img class="img1" src="slike/denis_original.jpg" alt="Denis_original">
			<img class="img2" src="slike/denis500px.jpg" alt="Denis_original">
			<img class="img3" src="slike/denis400px.jpg" alt="Denis_original">
			<img class="img4" src="slike/denis360px.jpg" alt="Denis_original">
		</picture>
		<p class="font_change">Denis je naš harmonikaš i najmlađi član sastava koji još od malih nogu (iako je sada već poprilično
		velik) prebire prste po crno-bijelim tipkama. Voli kada na svirci dođe „na svoje“. Pažljivo brine da
		naša oprema sigurno stigne na pravo odredište. 
		</p>
	</div>
</body>
</html>