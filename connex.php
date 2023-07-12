
<?php 
// Regarde les données en POST
$nom = ( isset($_POST['nom']) && !empty( $_POST['nom'] ) ) ? htmlspecialchars( $_POST['nom']) : null;
$prenom = ( isset($_POST ['pnom']) && !empty( $_POST['pnom'] ) ) ? htmlspecialchars( $_POST['pnom']) : null;
$email = ( isset( $_POST['email'] ) && !empty( $_POST['email'] ) ) ? htmlspecialchars( $_POST['email'] ) : null;
$pass = ( isset($_POST['pass']) && !empty($_POST['pass']) ) ? htmlspecialchars( $_POST['pass'] ) : null;

// if ( $nom && $prenom && $email && $pass) {
//     // ? Cryptage
//     $nom = md5(md5($nom) . strlen($nom));
//     $prenom = md5(md5($prenom) . strlen($prenom));
//     $email = md5(md5($email) . strlen($email));
//     $pass = sha1(md5($pass) . md5($pass));
    
    // ? Connexion à la base de donnée
    try {
        // Connexion
        include_once("./inc0/constants.inc.php");
        $conn = new PDO('mysql:host=' . HOST . ';dbname=' . DATA . ';port=' . PORT . ';charset=utf8', USER, PASS );
        // Gestion des attributs de connexion: Exception et retour du select
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        // Préparation de la requête
        $query = $conn->prepare('SELECT * FROM user WHERE email=? AND pass=? AND nom=? AND pnom=? AND active=?');
        $query->execute(array( $nom, $prenom, $email, $pass, 1));
        // Si la ligne est trouvée
        if ($query->rowCount()===1) {
            $row = $query -> fetch();
            // Redirection
            header('location:redirection.php');
        } else {
            echo 'Utilisateur inconnu.';
        }
    } catch (PDOException $err) {
        echo $err->getMessage();
    }
//}
?>