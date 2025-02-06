
<?php  
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: login_register.php");
 }
 
$connect = mysqli_connect('sql200.infinityfree.com', 'if0_38183638', 'tsatase1', 'if0_38183638_bendapp');
$query = "SELECT * FROM svirke ORDER BY datum ASC";  
$result = mysqli_query($connect, $query);  
?> 
 
 <!DOCTYPE html>  
<html>  
<head>  
    <?php include_once 'header.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">  
    <style>
    .container {
        width: 100%;
        margin: 40px auto;
        padding: 0;
        max-width: 1200px;  /* Max width for the entire container */
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .header-container {
        margin-bottom: 30px;
        text-align: center;
    }

    h1 {
        color: #fff;
        font-size: 2em;
        font-weight: bold;
        text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
        background-color: rgba(0, 0, 0, 0.5);
        padding: 10px;
        border-radius: 5px;
        display: inline-block;
    }

    .form-container {
        background-color: #f7f7f7;
        padding: 10px;
        border-radius: 8px;
        margin-bottom: 30px;
        width: 80%;
        max-width: 500px;
        margin: 0 auto;
    }

    #order_table {
        margin-top: 30px;
        margin-bottom: 30px;
        justify-content: center;
        align-items: center;
        width: 80%;
        margin-left: auto;
        margin-right: auto; /* Horizontally centers the table */
    }

    td {
        font-family: 'Libre Baskerville', serif;
        color: white;
        text-align: center;
        vertical-align: middle;
    }

    th {
        font-weight: bold;
        background-color: #426DFB;
        text-align: center;
        vertical-align: middle;
    }

    .navbar {
        margin-bottom: 0;
    }

    .navbar-nav {
        margin-top: 8px;
    }
</style>

</head>  
<body>  
    <!-- Navigation bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                <a class="navbar-brand" id="brand" href="index.php">TS "Ataše"</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <p class="navbar-text">Prijavljeni ste kao</p>
                <p class="navbar-text" id="creditials"><?php echo $_SESSION['username']?> <?php echo $_SESSION['surname']?></p>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span> Odjava</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br></br>
    <div class="container">
    <!-- Header container -->
    <div class="header-container">
        <h1 align="center">Kalendar tamburaškog sastava ATAŠE</h1>
    </div>

    <!-- Form container -->
    <div class="form-container">
        <div class="col-md-3">  
            <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  
        </div>  
        <div class="col-md-3">  
            <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />  
        </div>  
        <div class="col-md-5">  
            <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info" />  
        </div>  
        <div style="clear:both"></div>                 
    </div>  

    <!-- Table container -->
    <div id="order_table">
        <table class="table table-bordered">
            <tr>  
                <th width="30%">Datum</th>  
                <th width="40%">Lokacija</th>    
                <th width="30%">Vrsta</th>  
            </tr>  
        <?php  
        while($row = mysqli_fetch_array($result)) {  
        ?>  
            <tr>  
                <td><?php echo date('d/m/Y', strtotime($row["datum"])); ?></td>  
                <td><?php echo $row["lokacija"]; ?></td>   
                <td><?php echo $row["type"]; ?></td>  
            </tr> 
        <?php  
        }  
        ?>  
        </table>  
    </div>
</div>

    <script>  
        $(document).ready(function() {  
            $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd'   
            });  
            $(function() {  
                $("#from_date").datepicker();  
                $("#to_date").datepicker();  
            });  

            $('#filter').click(function() {  
                var from_date = $('#from_date').val();  
                var to_date = $('#to_date').val();  
                if (from_date != '' && to_date != '') {  
                    $.ajax({  
                        url: "filter.php",  
                        method: "POST",  
                        data: { from_date: from_date, to_date: to_date },  
                        success: function(data) {  
                            $('#order_table').html(data);  
                        }  
                    });  
                } else {  
                    alert("Molimo odaberite datum.");  
                }  
            });  
        });  
    </script>  
</body>  
</html>


