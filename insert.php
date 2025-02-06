<?php

//insert.php
//Povezivanje na bazu
$connect = new PDO('mysql:host=localhost;dbname=test', 'root', ''); //Ovo je original
$connect = mysqli_connect('localhost', 'root', '', 'bendapp');

if(isset($_POST["submit"]))
{
 //receive all input values from the form
 $datum = mysqli_real_escape_string($connect, $_POST['datum']);
 $lokacija = mysqli_real_escape_string($connect, $_POST['lokacija']);
 $kontakt = mysqli_real_escape_string($connect, $_POST['kontakt']);
 $cijena = mysqli_real_escape_string($connect, $_POST['cijena']);
 $opis = mysqli_real_escape_string($connect, $_POST['opis']);
 $type = mysqli_real_escape_string($connect, $_POST['type']);
 $autor = $_SESSION['username']." ".$_SESSION['surname'];
  
 $query = "INSERT INTO svirke (datum, lokacija, kontakt, cijena, opis, autor, type) 
  			  VALUES('$datum', '$lokacija','$kontakt','$cijena', '$opis', '$type', '$autor' )";
 
if(mysqli_query($connect, $query)){
    echo "Zapis uspješno dodan.";
	header('location: dashboard.php');
    } else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($connect);
    }
}
?>