<!DOCTYPE html>
<html lang="en">
<head>
 <?php include_once 'header.php'; ?>
  <link rel="stylesheet" href="css/fakeLoader.css">
</head>
<body>
	<div class="welcome-message">
		<h1>Dobrodošli na stranicu benda!</h1>
		<p>Drago nam je da ste ovdje.</p>
	</div>

	<div class="fakeloader"></div>
	<?php include_once 'navbar.php'; ?>	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/fakeLoader.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".fakeloader").fakeLoader({
                timeToHide:1200,
                bgColor:"#1abc9c",
                spinner:"spinner6"
            });
        });
    </script>
</body>
<footer>
<?php  include_once 'footer.php'; ?>
</footer>
</html>
