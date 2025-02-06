<?php
session_start();
ob_start();
require_once 'connection.php';

// initializing variables

$errors = array();
$error = false;

// connect to the database
$db = mysqli_connect('sql200.infinityfree.com', 'if0_38183638', 'tsatase1', 'if0_38183638_bendapp');

//LOGIN USER
if ( isset($_POST['btn-login']) ) {
    // prevent sql injections / clear user invalid inputs
    $username = trim($_POST['username']);
    $username = strip_tags($username);
    $username = htmlspecialchars($username);

    $password = trim($_POST['password']);
    $password = strip_tags($password);
    $password = htmlspecialchars($password);

    // prevent sql injections / clear user invalid inputs
    // if there's no error, continue to login
    if (!$error) {

        $res   = mysqli_query($conn, "SELECT id, ime, prezime,type FROM users WHERE password='$password' AND username = '$username'");
        $row   = mysqli_fetch_array($res);
        $count = mysqli_num_rows($res); // if uname / pass correct it returns must be 1 row

        if ( $count == 1) {
            $_SESSION['user'] = $row['id'];
            $_SESSION['username'] = $row['ime'];
            $_SESSION['surname'] = $row['prezime'];

            if ($row['type'] == 'admin'){
				header("Location: dashboard.php");
			}
			else {
				header("Location: kalendar2.php");
			}
        } else {
            $errMSG = "Unijeli ste krivo ime ili lozinku, pokušajte ponovno...";
        }
    }
}


// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $ime        = mysqli_real_escape_string($db, $_POST['ime']);
    $prezime    = mysqli_real_escape_string($db, $_POST['prezime']);
    $username   = mysqli_real_escape_string($db, $_POST['username']);
    $email      = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    //Prvi način validacije da mi samo iznad izbacuje šta nisam upisao
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "Lozinke se ne podudaraju! Pokušajte ponovno.");
    }

    //Provjera baze da ne postoji već korisnik sa takvim korisničkim imenom ili mailom.
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result           = mysqli_query($db, $user_check_query);
    $user             = mysqli_fetch_assoc($result);

    if ($user) {
        // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "Korisničko ime već postoji!");
        }

        if ($user['email'] === $email) {
            array_push($errors, "E-mail već postoji!");
        }
    }

    //Ako je sve oke, registracija korisnika.
    if (count($errors) == 0) {

        $query = "INSERT INTO users (ime, prezime, username, email, password)
        VALUES('$ime', '$prezime','$username','$email', '$password_1')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Uspjesno ste registrirani!";
        header('location: succesRegistration.php');
    }
    else {
        $errMSG = "Niste popunili sva potrebna polja.";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
	<head>
	    <?php include_once 'header.php'; ?>
        <link rel="stylesheet" type="text/css" href="css/loginStyle2.css">
        <link rel="stylesheet" type="text/css" href="css/loginAnimate.css">
        <style>
            html, body {
                height: 100%;
                margin: 0;
                overflow: auto;
            }
            #container_form{
                text-align: left;
                margin: 0;
                padding: 0;
                margin: 0 auto;
            }
			.container{
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100%;
                text-align: center;
			}
        </style>
    </head>

    <body>
        <?php include_once 'navbar.php'; ?>
        <div class="container">
            <br><br><br><br>
            <section>
                <div id="container_form" >
                    <a class="hiddenanchor" id="toregister">
                    </a>
                    <a class="hiddenanchor" id="tologin">
                    </a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <?php
                            if ( isset($errMSG) ) {
                                ?>
                                <div class="form-group">
                                    <div class="alert alert-danger">
                                        <span class="glyphicon glyphicon-info-sign">
                                        </span> <?php echo $errMSG; ?>
                                    </div>
                                </div><?php
                            } ?>
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                                <h1>
                                    Prijavi se
                                </h1>
                                <p>
                                    <label for="username" class="uname" data-icon="u" >
                                        Korisničko ime
                                    </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername"/>
                                </p>
                                <p>
                                    <label for="password" class="youpasswd" data-icon="p">
                                        Lozinka
                                    </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
                                </p>
                                <p class="login button">
                                    <input type="submit" name="btn-login" value="Prijava" />
                                </p>
                                <p class="change_link">
                                    Niste još član?
                                    <a href="#toregister" class="to_register">
                                        Registriraj se...
                                    </a>
                                </p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <?php
                            if ( isset($errMSG) ) {
                                ?>
                                <div class="form-group">
                                    <div class="alert alert-danger">
                                        <span class="glyphicon glyphicon-info-sign">
                                        </span> <?php echo $errMSG; ?>
                                    </div>
                                </div><?php
                            } ?>
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                                <h1>
                                    Registriraj se
                                </h1>
                                <p>
                                    <label for="namesignup" class="ime" data-icon="u">
                                        Ime
                                    </label>
                                    <input id="nemesignup" name="ime" required="required" type="text" placeholder="myname" />
                                </p>
                                <p>
                                    <label for="surnamesignup" class="prezime" data-icon="u">
                                        Prezime
                                    </label>
                                    <input id="surnamesignup" name="prezime" required="required" type="text" placeholder="mysurname" />
                                </p>
                                <p>
                                    <label for="emailsignup" class="email" data-icon="e" >
                                        E-mail
                                    </label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="mymail@mail.com"/>
                                </p>
                                <p>
                                    <label for="usernamesignup" class="username" data-icon="u">
                                        Korisničko ime
                                    </label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="myusername" />
                                </p>
                                <p>
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">
                                        Lozinka
                                    </label>
                                    <input id="passwordsignup" name="password_1" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p>
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">
                                        Molimo potvrdite lozinku
                                    </label>
                                    <input id="passwordsignup_confirm" name="password_2" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button">
                                    <input type="submit" name="reg_user" value="Registriraj"/>
                                </p>
                                <p class="change_link">
                                    Već ste član ?
                                    <a href="#tologin" class="to_register">
                                        Prijavi se...
                                    </a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>

</html>