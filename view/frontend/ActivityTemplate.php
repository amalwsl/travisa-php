<?php
session_start(); // Start the session
include '../../Controller/activityC.php';

// Function to sanitize user input
function sanitize($input) {
  return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

// Generate a new session ID and invalidate the old one
function regenerateSession() {
  // Copy the current session ID and close the session
  $newSessionId = session_create_id();
  session_write_close();

  // Set the new session ID and start the session with it
  session_id($newSessionId);
  session_start();
}

// Check if the session variables are already set
if (isset($_SESSION['activityId'], $_SESSION['nomActivite'], $_SESSION['type'], $_SESSION['description'], $_SESSION['duree'], $_SESSION['id_evenement'], $_SESSION['difficulte'], $_SESSION['categorie'], $_SESSION['prix'])) {
  // Retrieve the activity data from the session and sanitize the values
  $activityId = sanitize($_SESSION['activityId']);
  $nomActivite = sanitize($_SESSION['nomActivite']);
  $type = sanitize($_SESSION['type']);
  $description = sanitize($_SESSION['description']);
  $duree = sanitize($_SESSION['duree']);
  $id_evenement = sanitize($_SESSION['id_evenement']);
  $difficulte = sanitize($_SESSION['difficulte']);
  $categorie = sanitize($_SESSION['categorie']);
  $prix = sanitize($_SESSION['prix']);

  // Validate the session ID to prevent session hijacking
  if ($_SESSION['user_agent'] !== $_SERVER['HTTP_USER_AGENT'] || $_SESSION['remote_addr'] !== $_SERVER['REMOTE_ADDR']) {
    // Regenerate the session ID and invalidate the old one
    regenerateSession();

    // Redirect to an error page or display an error message
    header('Location: error.php');
    exit;
  }
} else {
  // Redirect to an error page or display an error message
  header('Location: error.php');
  exit;
}
?>

<<!DOCTYPE html>
<html>
<head>
  <title>My Website</title>
</head>
<body>
  <h1>Welcome to My Website!</h1>
  <p>This is the homepage of my website. Feel free to explore and navigate through the different sections.</p>

  <h2>Activity Details</h2>
  <p>Activity ID: <?php echo $activityId; ?></p>
  <p>Nom de l'activité: <?php echo $nomActivite; ?></p>
  <p>Type: <?php echo $type; ?></p>
  <p>Description: <?php echo $description; ?></p>
  <p>Durée: <?php echo $duree; ?></p>
  <p>ID de l'événement: <?php echo $id_evenement; ?></p>
  <p>Difficulté: <?php echo $difficulte; ?></p>
  <p>Catégorie: <?php echo $categorie; ?></p>
  <p>Prix: <?php echo $prix; ?></p>

  <footer>
    <p>© 2024 My Website. All rights reserved.</p>
  </footer>
</body>
</html>
