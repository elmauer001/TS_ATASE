<!DOCTYPE html>
<html lang="en">
<head>
	<title>Igor Elmauer</title>
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
				<img class="img1" src="slike/igor_original.jpg" alt="Igor_original">
				<img class="img2" src="slike/igor500px.jpg" alt="Igor_manja">
				<img class="img3" src="slike/igor400px.jpg" alt="Igor_manja">
				<img class="img4" src="slike/igor360px.jpg" alt="Igor_najmanja">
		</picture>
		<p class="font_change">Igor je rođen 1991. godine, a u sastavu svira kontru (jer ne zna drugačije nego kontra svega!). 
		U sastavu je od samih početaka te jedan od osnivača prve postave ATAŠE-a. Svoje prve tamburaške korake počinje 2004. godine u 
		četvrtom razredu osnovne škole kao basprimaš u orkestru čika Šime Seletkovića. Ubrzo prelazi na kontru jer mu je oduvijek to bio 
		najdraži instrument. Sa prijateljima iz orkestra osniva svoj prvi sastav po imenu "Cager band" koji je vodio učitelj Damir Čondić. 
		Nakon nekoliko uspješnih godina sviranja članovi sastava prelaze u kvalitetnije bendove, a Igor sudjeluje u osnivanju novog benda 
		TS "Sinovi Slavonije". U Sinovima Slavonije preuzima odgovornost glavnog vokala. Nakon uspješne sviračke karijere u Sinovima Slavonije 
		2012. godine prelazi u Tamburaški sastav "Ataše". Ostaje glavni vokal u dobrom dijelu repertoara, ali glavnu pjevačku ulogu od odlaska
		Danijela Mandure do danas prepušta Blažu Lučiću. Igor se brine da sastav na live svirkama zvuči odlično pa preuzima odgovornost 
		glavnog tonca.  Najbolje petlja prstima oko miksete, a to područje mu spada i pod jednu vrstu hobija, jer se bavi održavanjem i 
		popravkom računala i računalne opreme. Izrazito voli adrenalin, a skok s padobranom samo je jedan od njegovih doživljaja 
		(to što uzgaja tarantule uopće nije bitno). Glavni je za razno razne provale u ekipi, podizanje atmosfere, a uvijek je vesel i 
		nasmijan. U slobodno vrijeme Igor je student Informatike. <br>
		<br>	
		Kao životni moto odabire citat: <br>
		<br>
		<i>"Hakuna Matata!"</i><br>
		</p>
	</div>
</body>
</html>