include '../config.php';
include '../Model/activity.php';


class ActivityC {
  public function listActivities() {
    $sql = "SELECT * FROM activités";
    $db = config::getConnexion();
    try {
      $query = $db->prepare($sql);
      $query->execute();
      $activities = $query->fetchAll();
      
      return $activities;
    } catch (Exception $e) {
        die('Error:' . $e->getMessage());
    }
  }

  function getActivityById($id) {
    $sql = "SELECT * FROM activités WHERE `id_activité` = :id";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->execute([
          ':id' => $id,
        ]);

        $activity = $query->fetch();
        return $activity;
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
  }

  function addActivity($activity) {
    $sql = "INSERT INTO activités (id_activité, nomActivité, type, description, durée, id_événement, difficulté, catégorie, prix) 
            VALUES (:id, :nomActivite, :type, :description, :duree, :id_evenement, :difficulte, :categorie, :prix)";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->execute([
            ':id' => $activity->getIdActivite(),
            ':nomActivite' => $activity->getNomActivite(),
            ':type' => $activity->getType(),
            ':description' => $activity->getDescription(),
            ':duree' => $activity->getDuree(),
            ':id_evenement' => $activity->getIdEvenement(),
            ':difficulte' => $activity->getDifficulte(),
            ':categorie' => $activity->getCategorie(),
            ':prix' => $activity->getPrix(),
        ]);
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

    
function updateActivity($activity, $id) {
    $db = config::getConnexion();
    try {
        $query = $db->prepare(
            "UPDATE activités SET
                `id_activité` = :id_activite, 
                `nomActivité` = :nomActivite,
                `type` = :type,
                `description` = :description,
                `durée` = :duree,
                `id_événement` = :id_evenement,
                `difficulté` = :difficulte,
                `catégorie` = :categorie,
                `prix` = :prix
            WHERE `id_activité` = :id"
        );

        $query->execute([
            ':id_activite' => $activity->getIdActivite(),
            ':nomActivite' => $activity->getNomActivite(),
            ':type' => $activity->getType(),
            ':description' => $activity->getDescription(),
            ':duree' => $activity->getDuree(),
            ':id_evenement' => $activity->getIdEvenement(),
            ':difficulte' => $activity->getDifficulte(),
            ':categorie' => $activity->getCategorie(),
            ':prix' => $activity->getPrix(),
            ':id' => $id,
        ]);

        return $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


  function deleteActivity($id) {
    $sql = "DELETE FROM activités WHERE `id_activité` = :id";
    $db = config::getConnexion();

    try {
      $req = $db->prepare($sql);
      $req->bindValue(':id', $id);
      $req->execute();
    } catch (Exception $e) {
        die('Error:' . $e->getMessage());
    }
  }
}