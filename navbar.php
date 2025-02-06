<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tamburaški sastav Ataše</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<style>
	#myNavbar {
		font-family: 'Marmelad', sans-serif;
		font-size: 18px;
		padding-top:0px;
		padding-bottom:0px;
		padding-left:10px;
		padding-right:10px;
    }
	#myNavbar a:hover {
		color: #426DFB;	
    }
	#brand{
		font-family: 'Marmelad', sans-serif;
		font-size: 30px;
		color: #426DFB;
		text-shadow: 0 0 3vw #2356FF;
		animation: flux 2s linear infinite;
		-moz-animation: flux 2s linear infinite;
		-webkit-animation: flux 2s linear infinite;
		-o-animation: flux 2s linear infinite;
    }
	@keyframes flux {
		0%,
		100% {
			text-shadow: 0 0 1vw #1041FF, 0 0 3vw #1041FF, 0 0 10vw #1041FF, 0 0 10vw #1041FF, 0 0 .4vw #8BFDFE, .5vw .5vw .1vw #147280;
			color: #28D7FE;
			}
		50% {
			text-shadow: 0 0 .5vw #082180, 0 0 1.5vw #082180, 0 0 5vw #082180, 0 0 5vw #082180, 0 0 .2vw #082180, .5vw .5vw .1vw #0A3940;
			color: #146C80;
			}
		}
	@media (max-width: 820px) {
		.navbar-header {
			float: none;
		}
		.navbar-left,.navbar-right {
			float: none !important;
		}
		.navbar-toggle {
			display: block;
		}
		.navbar-collapse {
			border-top: 1px solid transparent;
			box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
		}
		.navbar-fixed-top {
			top: 0;
			border-width: 0 0 1px;
		}
		.navbar-collapse.collapse {
			display: none!important;
		}
		.navbar-nav {
			float: none!important;
			margin-top: 7.5px;
		}
		.navbar-nav>li {
			float: none;
		}
		.navbar-nav>li>a {
			padding-top: 10px;
			padding-bottom: 10px;
		}
		.collapse.in{
			display:block !important;
		}
	}
</style>
	</head>
	<body>
	<!-- Navigation bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
            <a class="navbar-brand" id="brand" href="index.php">TS "Ataše"</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" id="id01"><a href="about.php">O NAMA</a></li>
		            <li class="nav-item" id="id02"><a href="members.php">SASTAV</a></li> 
                    <li class="nav-item" id="id03"><a href="media.php">MEDIA</a></li> 
		            <li class="nav-item" id="id04"><a href="kontakt.php">KONTAKT</a></li>
                </ul>
	            <ul class="nav navbar-nav navbar-right">
                    <li><a href="login_register.php"><span class="glyphicon glyphicon-user"></span> Prijava/Registracija</a></li>
                </ul>
            </div>
        </div>
    </nav>
	</body>
</html>
	
	