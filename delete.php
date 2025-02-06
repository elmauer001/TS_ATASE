<?php

//delete.php

 if(isset($_POST['delete']))   //THE NAME OF THE BUTTON IS delete. 
    {
       foreach ($_POST["checkbox"] as $id){
       $de1 = "DELETE FROM //table-name WHERE PID='$id'";
       if(mysqli_query($conn, $de1))
       echo "<b>Deletion Successful. </b>";
       else
       echo "ERROR: Could not execute";
       }
    }
        if(isset($_POST['delete'])){
            echo"<b>Please make a selection to complete this operation.</b>";
        }

    ?>

?>