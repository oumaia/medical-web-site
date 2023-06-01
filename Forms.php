

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
<link rel="stylesheet" href="Forms.css">

    </head>
    <body>

   
   
      <section class="forms-section">
         
        <div class="forms" >
          <div class="form-wrapper is-active">
            <button type="button" class="switcher switcher-login">
              Login
              <span class="underline"></span>
            </button>
            <form class="form form-login" method="post" action="insert2.php">
              <fieldset>
                <legend>Please, enter your email and password for login.</legend>
                <div class="input-block">
                  <label for="login-email">E-mail</label>
                  <input id="login-email" type="texte" required name="Email" >
                </div>
                <div class="input-block">
                  <label for="login-password">Password</label>
                  <input id="login-password" type="password" required name="Password">
                </div>
              </fieldset>
              <input type="submit" value="Login" class="btn-login" name="connexion" >
            </form>
          </div>
          <div class="form-wrapper">
            <button type="button" class="switcher switcher-signup" >
              <!-- <input type="submit" value="Sign up " class="btn btn-primary my-2" name="aj"> -->
              Sign Up
              <span class="underline"></span>
            </button>
            <form class="form form-signup" method="post"  action="insert.php">
              <fieldset>
                <legend>Please, enter your email, password and password confirmation for sign up.</legend>
                <div class="input-block">
                  <label for="signup-email">Name</label>
                  <input id="name" type="text" required name="Name">
                </div>
                <div class="input-block">
                   <label for="sex">Sexe</label>
                    <select name="Sexe" id="Sexe" >
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                </div>
            
                <div class="input-block">
                  <label for="signup-email">E-mail</label>
                  <input id="signup-email" type="email" required name="Email">
                </div>
                <div class="input-block">
                  <label for="birth-date">birth date</label>
                  <input id="date" type="date" required name="birthdate">
                </div>
                <div class="input-block">
                  <label for="signup-password">Password</label>
                  <input id="signup-password" type="password" required name="Password">
                </div>
                <div class="input-block">
                  <label for="signup-password-confirm">Confirm password</label>
                  <input id="signup-password-confirm" type="password" required >
                </div>
                
              </fieldset>
              <input type="submit" class="btn-signup" value="Continue" name="ajout">
            </form>
          </div>
        </div>
      </section>
      <script >const switchers = [...document.querySelectorAll('.switcher')]

        switchers.forEach(item => {
            item.addEventListener('click', function() {
                switchers.forEach(item => item.parentElement.classList.remove('is-active'))
                this.parentElement.classList.add('is-active')
            })
        })
     </script>


<?php
if (isset($_POST['ajout'])) {
    $name = $_POST['Name'];
    $sel = $_POST['Sexe'];
    $email = $_POST['Email'];
    $dtebrth = $_POST['birthdate'];
    $password = $_POST['Password'];
   

    if (!empty($name) && !empty($sel) && !empty($email) && !empty($dtebrth) && !empty($password)) {
      $date = date(format:'Y-m-d');
        $mysqli = new mysqli('localhost', 'root', '', 'miniprojet');

        if ($mysqli->connect_errno) {
            echo "Échec de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            exit;
        }

        $stmt = $mysqli->prepare('INSERT INTO utilisateur VALUES(null,?,?,?,?,?,?)');
        $stmt->bind_param('', $name, $date, $sel, $email, $dtebrth, $password);

        $stmt->execute();

        // Redirection
        header('location:index.php');
        exit;

        $stmt->close();
        $mysqli->close();
    } else {
        ?>
        <div class="alert alert-danger" role="alert">
            Le nom, le sexe, l'e-mail, la date de naissance et le mot de passe sont obligatoires.
        </div>
        <?php
    }
}
?>

    <?php
if (isset($_POST['connexion'])) {
    $login = $_POST['login'];
    $pwd = $_POST['password'];

    if (!empty($login) && !empty($pwd)) {
      
        /* require_once 'include/database.php'; */
        $mysqli = new mysqli('localhost', 'root', '', 'miniprojet');

        if ($mysqli->connect_errno) {
            echo "Échec de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            exit;
        }

        $stmt = $mysqli->prepare('SELECT * FROM utilisateur WHERE login=? AND password=?');
        $stmt->bind_param('ss', $login, $pwd);

        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows >= 1) {
            $_SESSION['utilisateur'] = $result->fetch_assoc();
            header('location: index.php');
            exit;
        } else {
          echo '<script type="text/javascript" myFunction() {alert("test")} </script>';
            ?>
            <div class="alert alert-danger" role="alert">
                Login ou mot de passe incorrect.
            </div>
            <?php
        }

        $stmt->close();
        $mysqli->close();
    } else {
        ?>
        <div class="alert alert-danger" role="alert">
            Le login et le mot de passe sont obligatoires.
        </div>
        <?php
    }
}
?>

   
    </body>