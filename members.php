<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'header.php'; ?>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
#id02{
	text-decoration: underline;
	}
.w3-third{
    font-family: 'Libre Baskerville', serif;
	color: white;
    }
img{
	width:60%
	}
@media screen and (min-width: 992px) {
	.w3-third {
		font-size: 18px;
		}
	}
	
@media screen and (max-width: 991px) {
	.w3-third {
		font-size: 16px;
		}
	}
	
@media screen and (max-width: 767px) {
	.w3-third{
		font-size: 14px;
		}
	img{
		width:50%
		}
	}

@media screen and (max-width: 479px) {
	.w3-third {
		font-size: 13px;
		}
	}

</style>
</head>
 <body>
	<?php include_once 'navbar.php'; ?>
	<br></br>
 	<!-- Band members section-->
    <div class="w3-container w3-content w3-center w3-padding-64">
        <div class="w3-third w3-padding-32">
		    <a href="igor.php"><img src="/slike/igor_icon.jpg" class="img-circle w3-hover-shadow w3-animate-zoom" alt="Igor Elmauer"></a><br><br>
			<p class="member">Igor Elmauer</p>
		</div>
        <div class="w3-third w3-padding-32">
			<a href="blaz.php"><img src="/slike/blaz_icon.jpg" class="img-circle w3-hover-shadow w3-animate-zoom" alt="Blaž Lučić"></a><br><br>
			<p class="member">Blaž Lučić</p>
		</div>
        <div class="w3-third w3-padding-32">
			<a href="matija.php"><img src="/slike/matija_icon.jpg" class="img-circle w3-hover-shadow w3-animate-zoom" alt="Matija Babić"></a><br><br>
			<p class="member">Matija Babić</p>
		</div>
	    <div class="w3-third w3-padding-32">
			<a href="denis.php"><img src="/slike/denis_icon.jpg" class="img-circle w3-hover-shadow w3-animate-zoom" alt="Denis Kovačević"></a><br><br>
			<p class="member">Denis Kovačević</p>
		</div>
	    <div class="w3-third w3-padding-32">
			<a href="ivan.php"><img src="/slike/ivan_icon.jpg" class="img-circle w3-hover-shadow w3-animate-zoom" alt="Ivan Šokčević"></a><br><br>
			<p class="member">Ivan Šokčević</p>
		</div>
	    <div class="w3-third w3-padding-32">
			<a href="majhen.php"><img src="/slike/majhen_icon.jpg" class="img-circle w3-hover-shadow w3-animate-zoom" alt="Ivan Majhen"></a><br><br>
			<p class="member">Ivan Majhen</p>
		</div>
	</div>
</body>
</html>
 