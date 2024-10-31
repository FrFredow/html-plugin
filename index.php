<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carte de Profil</title>
  <!-- Lien vers le fichier CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <?php
    // Variables dynamiques pour le profil
    $imageUrl = "https://via.placeholder.com/100";
    $name = "Jean Dupont";
    $description = "Développeur Web passionné, spécialisé en HTML, CSS et JavaScript.";
    $profileLink = "#";
  ?>

  <div class="profile-card">
    <img src="<?= $imageUrl ?>" alt="Image de profil">
    <h2><?= $name ?></h2>
    <p><?= $description ?></p>
    <a href="<?= $profileLink ?>">Voir le Profil</a>
  </div>

</body>
</html>
