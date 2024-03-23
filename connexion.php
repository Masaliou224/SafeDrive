<?php
require('./config.php');




if (!empty($_POST['credential'])) {


    if (
        empty($_COOKIE['g_csrf_token'])
        || empty($_POST['g_csrf_token'])
        || $_COOKIE['g_csrf_token'] != $_POST['g_csrf_token']
    ) {
        echo "Erreur de vérification";
        exit();
    }


    $clientId = "194314371945-1eucdcp9mrf9gpeunha98vel33qflml6.apps.googleusercontent.com";
    $client = new Google_Client(['client_id' => $clientId]);  // Specify the CLIENT_ID of the app that accesses the backend
    
    $idToken = $_POST['credential'];
    $user = $client->verifyIdToken($idToken);
    print_r($user);
    if ($payload) {
        $_SESSION['user'] = $user;

        // If request specified a G Suite domain:
        //$domain = $payload['hd'];
    } else {
        // Invalid ID token
        echo "Erreur lors de l'authentification";
    }


}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="connexion.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <form>
        <label for="nom"><input type="text" id="nom" name="nom" placeholder="Email/Contact:"/></label>
        <label for="password"><input type="text" id="password" name="password" placeholder="Mots de passe"/></label>
        <input type="submit" value="Connexion">
    </form>
    
    <div id="g_id_onload"
        data-client_id="194314371945-1eucdcp9mrf9gpeunha98vel33qflml6.apps.googleusercontent.com"
        data-context="signin"
        data-ux_mode="popup"
        data-login_uri="http://localhost:80/SafeDrive/connexion.php"
        data-auto_prompt="false">
    </div>

    <div class="g_id_signin"
        data-type="standard"
        data-shape="pill"
        data-theme="filled_blue"
        data-text="signin_with"
        data-size="medium"
        data-logo_alignment="left">
    </div>


    <script src="https://accounts.google.com/gsi/client" async></script>
</body>
</html>