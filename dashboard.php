<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login_register.php");
    exit;
}

// Povezivanje na bazu.
$connect = mysqli_connect('sql200.infinityfree.com', 'if0_38183638', 'tsatase1', 'if0_38183638_bendapp');

// Provjera je li povezivanje uspješno.
if ($connect === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Upit za dohvaćanje podataka
$query = "SELECT * FROM svirke ORDER BY datum ASC";
$result = mysqli_query($connect, $query);

// Provjera da li je upit izvršen ispravno.
if ($result === false) {
    die("ERROR: Could not execute query: $query. " . mysqli_error($connect));
}

// Unos podataka u bazu
if (isset($_POST['submit'])) {
    // Provjera i sanitizacija unosa
    if (isset($_POST['datum'], $_POST['lokacija'], $_POST['kontakt'], $_POST['cijena'], $_POST['opis'], $_POST['type'])) {
        // Prepared statement za unos podataka
        $stmt = $connect->prepare("INSERT INTO svirke (datum, lokacija, kontakt, cijena, opis, type, autor) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $datum = $_POST['datum'];
        $lokacija = $_POST['lokacija'];
        $kontakt = $_POST['kontakt'];
        $cijena = $_POST['cijena'];
        $opis = $_POST['opis'];
        $type = $_POST['type'];
        $autor = $_SESSION['username'] . " " . $_SESSION['surname'];
        
        // Bind parametri
        $stmt->bind_param("sssssss", $datum, $lokacija, $kontakt, $cijena, $opis, $type, $autor);
        
        // Izvršavanje upita
        if ($stmt->execute()) {
            echo "Records added successfully.";
            header('location: dashboard.php');
            exit;
        } else {
            echo "ERROR: Could not execute query. " . $stmt->error;
        }
        $stmt->close();
    }
}

// Brisanje svirke
foreach ($_POST as $key => $value) {
    if (strpos($key, 'delete_') === 0) {
        // Ovo znači da je pritisnut gumb za brisanje za određeni redak
        $id = str_replace('delete_', '', $key);  // Dobivanje ID-a iz imena gumba
        $stmt = $connect->prepare("DELETE FROM svirke WHERE id = ?");
        $stmt->bind_param("i", $id);
        
        if ($stmt->execute()) {
            echo "Record deleted successfully.";
            header('Location: dashboard.php');
            exit;
        } else {
            echo "ERROR: Could not execute query. " . $stmt->error;
        }
        $stmt->close();
    }
}

// Zatvaranje veze s bazom nakon završetka rada
mysqli_close($connect);
?>

<head>
<?php include_once 'header.php'; ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>

.container{
	padding-top:50px;
}
h1{
	font-family: Comic Sans MS;
	font-size: 32px;
}
.btn{
	margin-left: 10px;
	margin-bottom: 15px;
	margin-top: 10px;
}
#creditials {
  text-transform: uppercase;
}
td{
	font-family:'Libre Baskerville', serif;
	color: white;
    text-align: center; 
    vertical-align: middle;
}
th{
	font-weight: bold;
	background-color:#426DFB;
    text-align: center; 
    vertical-align: middle;
}

/* Basic styling for submit button */
input[type="submit"] {
    background-color: #007BFF; /* Blue background */
    color: white;              /* White text */
    border: none;              /* Remove border */
    padding: 5px 10px;        /* Add some padding for size */
    font-size: 14px;           /* Adjust font size */
    cursor: pointer;          /* Pointer cursor on hover */
    border-radius: 5px;        /* Rounded corners */
    transition: background-color 0.3s ease, transform 0.2s ease; /* Smooth transitions */
}

/* Hover effect */
input[type="submit"]:hover {
    background-color: #0056b3; /* Darker blue when hovered */
    transform: translateY(-2px); /* Slight lift effect */
}

/* Focus effect (when the button is focused or clicked) */
input[type="submit"]:focus {
    outline: none; /* Remove the default focus outline */
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Blue shadow */
}

/* Active state (when the button is clicked) */
input[type="submit"]:active {
    background-color: #004085; /* Even darker blue */
    transform: translateY(0); /* Return to normal position */
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
            <a class="navbar-brand" id="brand"href="index.php">TS "Ataše"</a>
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
<form method="post">
    <div class="container" id="dasboard_container">
		<div class="col-md-6">
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-th-list"></span></span>
					<input type="date" name="datum" class="form-control" placeholder="Datum" maxlength="50" />
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-road"></span></span>
					<input type="text" name="lokacija" class="form-control" placeholder="Lokacija" maxlength="50" />
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></span>
					<input type="text" name="kontakt" class="form-control" placeholder="Kontakt" maxlength="50" />
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-euro"></span></span>
					<input type="text" name="cijena" class="form-control" placeholder="Cijena" maxlength="50" />
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
					<input type="text" name="opis" class="form-control" placeholder="Opis" maxlength="50" />
				</div>
			</div>
			
			<div class="form-group">
				<label for="sel1">Odaberi tip svirke:</label>
					<select class="form-control" id="type" name="type">
						<option>Javni nastup</option>
						<option>Privatna svirka</option>
						<option>Svadba</option>
						<option>Ostalo</option>
					</select>
				</label>
			</div>
				<input type="submit" name="submit" value="Dodaj događaj"/>
		</div>	 
    </div>
</form>

<!--Table of entries in database -->
<form method="post"> 
<div class="container">  
    <div class="table-responsive">  
        <h1 align="center">Upisane svirke.</h1><br /> 
        <table id="editable_table" class="table table-bordered ">
            <thead>
                <tr>
                    <th>DATUM</th>
                    <th>LOKACIJA</th>
                    <th>KONTAKT</th>
                    <th>CIJENA</th>
                    <th>OPIS</th>
                    <th>AUTOR</th>
                    <th>Action</th> <!-- Added a column for the delete button -->
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    echo '
                    <tr>
                        <td>' . htmlspecialchars($row["datum"]) . '</td>
                        <td>' . htmlspecialchars($row["lokacija"]) . '</td>
                        <td>' . htmlspecialchars($row["kontakt"]) . '</td>
                        <td>' . htmlspecialchars($row["cijena"]) . '</td>
                        <td>' . htmlspecialchars($row["opis"]) . '</td>
                        <td>' . htmlspecialchars($row["autor"]) . '</td>
                        <td>
                            <input type="submit" name="delete_' . $row['id'] . '" value="Obriši događaj">
                            <input type="hidden" name="id" value="' . $row['id'] . '">
                        </td>
                    </tr>
                    ';
                }
                ?>
            </tbody>
        </table>
    </div>  
</div>  
</form>
</body>
</html>
