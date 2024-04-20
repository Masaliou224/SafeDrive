<?php

require('./config.php');

if (empty($_SESSION['user'])) {
    header('location:/SafeDrive/connexion.html');
    exit();
}

$user = $_SESSION['user'];

?>







<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon Profil</title>
  <link rel="stylesheet" href="style1.css">
</head>
<body>
  <div class="container">
    <header>
    </header>
    <main>
      <section class="left-section">
        <div class="containerPP">
          <img src="<?= $user['picture'] ?>" alt="Photo de profil" id="profile-picture">
        </div>   
      </section>
      <section class="right-section">

        <h1>Mon profile</h1>

        <div class="profil-info">

            <div class="profil-info-item">
             <h2>Nom d'utilisateur:</h2>
             <button> <?= $user['given_name'] ?></button> </div>

            <div class="profil-info-item">
             <h2>Email:</h2>
             <button> <?= $user['email'] ?></button> </div>

        </div>

          <div class="message-container">
            <h1>Une urgence à signalez ?</h1>
            <h4>Remplissez le formulaire ci desous en étant le plus précis possible </h4>
            <form action="https://formspree.io/f/xzbnyeol" method="post">
              <input type="text" id="form" name="Nom et prénom" placeholder=" Nom et Prénom" required>
              <input type="email" id="form" name="E-mail" placeholder="E-mail" required>
              <input type="text" id="form" name="Localisation" placeholder="Quartier/Commune" required>
              <textarea id="message-input" placeholder="Message" name="Message" required></textarea>
              <button type="submit" id="send-button">Envoyez</button>
            </form>

          </div>
        </section>
    </main>
  </div>
</body>
</html>