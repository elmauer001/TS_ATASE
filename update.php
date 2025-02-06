<?php

//update.php

$connect = mysqli_connect('sql200.infinityfree.com', 'if0_38183638', 'tsatase1', 'if0_38183638_bendapp');

if(isset($_POST["update"]))
{
 $query = " UPDATE svirke SET (datum, lokacija, kontakt, cijena, opis, type, autor)  
 VALUES('$datum', '$lokacija','$kontakt','$cijena', '$opis', '$type', '$autor' ) WHERE id=:id ";
 
 if(mysqli_query($connect, $query)){
    echo "Zapis uspješno uređen.";
	header('location: dashboard.php');
    } else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($connect);
    }
}
 


?>