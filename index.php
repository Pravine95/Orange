<?php
session_start();
require_once("controleur/controleur.class.php");
$unControleur = new Controleur();

if (isset($_POST['Connexion'])) {
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $unUser = $unControleur->verifConnexion($email, $mdp);
    if ($unUser != null) {
        // Enregistrement dans la SESSION
        $_SESSION['nom'] = $unUser['nom'];
        $_SESSION['prenom'] = $unUser['prenom'];
        $_SESSION['email'] = $unUser['email'];
        $_SESSION['role'] = $unUser['role'];
        header("Location: index.php?page=1");
        exit; // Arrêtez le script après la redirection
    } else {
        echo "<br/> Veuillez vérifier vos identifiants";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Orange</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
</head>
<body>
    <center>
        <?php
        if (!isset($_SESSION['email'])) {
            require_once("vue/vue_form.php");
        } elseif (isset($_SESSION['email'])) {
            echo '<header>
            <nav style="background-color: #8B4000;">
            <ul>
            <li> <img src="images/logo.png" height="50" width="50"> 
            <a href="index.php?page=1">Accueil</a></li> 

            <li><img src="images/client.png" height="50" width="50">
            <a href="index.php?page=2">Client</a></li>

            <li>
            <img src="images/objet.png" height="50" width="50">
            <a href="index.php?page=3">Objet</a></li>

            <li>
            <img src="images/technicien.png" height="50" width="50">
            <a href="index.php?page=4">Technicien</a></li>

            <li>
            <img src="images/intervention.png" height="50" width="50">
            <a href="index.php?page=5">Intervention</a></li>

            <li><img src="images/sedeconnecter.png" height="50" width="50">
            <a href="index.php?page=6">Se déconnecter</a></li>
            </ul>
            </nav>
            </header>';

            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 1;
            }
            switch ($page) {
                case 1:
                    require_once("home.php");
                    break;
                case 2:
                    require_once("gestion_client.php");
                    break;
                case 3:
                    require_once("gestion_objet.php");
                    break;
                case 4:
                    require_once("gestion_technicien.php");
                    break;
                case 5:
                    require_once("gestion_intervention.php");
                    break;
                case 6:
                    session_destroy();
                    unset($_SESSION['email']);
                    header("Location: index.php");
                    exit; // Arrêtez le script après la redirection
                    break;
                default:
                    require_once("erreur.php");
                    break;
            }
        }
        if (isset($_SESSION['email'])) {
            echo '<!-- Pied de page -->
            <footer style="margin-top: 45px;" class="bg-dark text-center text-white">
            <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
            <!-- Facebook -->
            <a class="btn text-white btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button">
            <i class="fab fa-facebook-f"></i>
            </a>


            <!-- Twitter -->
             <a
        class="btn text-white btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
        ></a>

           <!-- Instagram -->
            <a
        class="btn text-white btn-floating m-1"
        style="background-color: #FF0000;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
        ></a>

      <!-- Linkedin -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
        ></a>

            
            </section>

            <section class="">
            <form action="">
            <!--Grid row-->
            <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
            <p class="pt-2">
            <strong>Veuillez écrire votre message : </strong>
            </p>
            </div>

            <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
            <input type="text" id="form5Example21" class="form-control" />
            </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-auto">
            <!-- Submit button -->
            <a href="mailto:nouzhati20@gmail.com" class="btn btn-outline-warning mb-4">
            Envoyer
            </a>
            </div>
            <!--Grid column-->
            </div>
            <!--Grid row-->
            </form>
            </section>
            <!-- Section: Form -->

            <!-- Section: Text -->

            <section class="">
            <!--Grid row-->
            <div class="row">
            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase text-warning" style="font-size: 23px;">A propos</h5>
            <br>
            <p>
            Orange est un projet fait en équipe axé sur la création dun site web en utilisant la programmation orientée objet (POO).
            </p>
            <img src="images/logo.png" height="100" width="150"> 
            </div>
            <!--Grid column-->

            <!--Grid column-->

            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase text-warning" style="font-size: 23px; ">Liens rapides</h5>
            <br>
            <ul class="list-unstyled mb-0">
            <li style=" margin-bottom: 10px;">
            <a href="index.php?page=1" class="text-white" style="text-decoration: none; font-size: 18px;">Accueil</a></li>
            </li>

            <li style=" margin-bottom: 10px;">
            <a href="index.php?page=2" class="text-white" style="text-decoration: none; font-size: 18px;">Client</a>
            </li>

            <li style=" margin-bottom: 10px;">
            <a href="index.php?page=3" class="text-white" style="text-decoration: none; font-size: 18px;">Objet</a></li>
            </li>

            <li style=" margin-bottom: 10px;">
            <a href="index.php?page=4" class="text-white" style="text-decoration: none; font-size: 18px;">Technicien</a>
            </li>

            <li style=" margin-bottom: 10px;">
            <a href="index.php?page=5" class="text-white" style="text-decoration: none; font-size: 18px; ">Intervention</a>
            </li>
            </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase text-warning" style="font-size: 23px;">CONTACT</h5>
            <br>
            <p>
            <i class="fa-solid fa-location-dot"></i> 6-8 impasse des 2 coussins, 75017, Paris
            </p>
            <p>
            <i class="fas fa-envelope mr-3"></i><a style="text-decoration:none; color: white;" href="mailto:nouzhati20@gmail.com"> nouzhati20@gmail.com</a>
            </p>
            <p> 
            <i class="fas fa-phone mr-3"></i>(+33) 7.83.80.26.33
            </p>
            <p> 
            <i class="fa-brands fa-github" style="font-size:24px" ></i><a  style="text-decoration:none; color: white;" href="https://github.com/Nouzouhat"> Athoumani Nouzouhati </a>
            </p>
            </div>
            <!--Grid column-->
            </div>
            <!--Grid row-->
            </section>
            <!-- Section: Links -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <p> Copyright @2023 créer par:
            <a href="#" style="text-decoration: none;">
            <strong class="text-warning"> Le Groupe A</strong>
            </a>  
            </p>
            </div>
            </footer>';
        }
        ?>
    </center>
</body>
</html>
