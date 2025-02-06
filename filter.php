<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connect = mysqli_connect('116.203.64.195', 'root', '', 'bendapp');  
      $output = '';  
      $query = "  
           SELECT * FROM svirke  
           WHERE datum BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
           <table class="table table-bordered">  
                <tr>  
                     <th width="30%">Datum</th>  
                     <th width="40%">Lokacija</th>  
                     <th width="30%">Vrsta</th>  
                </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["datum"] .'</td>  
                          <td>'. $row["lokacija"] .'</td>  
                          <td>'. $row["type"] .'</td>  
                     </tr>  
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">Nije pronađen niti jedan zauzet datum.</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>>