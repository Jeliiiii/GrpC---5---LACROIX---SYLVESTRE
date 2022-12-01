<!DOCTYPE html>
<html lang="fr">
<?php require_once "../action/database.php"; 
session_start();
?>

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Urbanist:wght@200&display=swap">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.css" media="screen">
  <link type="text/css" rel="stylesheet" href="../css/admin-style.css">
</head>

<body>
  <?php /*if(isset($_SESSION['user']) && $_SESSION['user']['admin']==1){*/
  require "adminnav.php"; ?>

  <div id="container">
    <!--Zone d'ajout-->
    <!--Récupérer d'un form les données à ajouter-->
    <?php
    echo "<h1><mark>";
    if (isset($_SESSION['res'])) {
      echo $_SESSION['res'];
      $_SESSION['res'] = " ";
    }
    echo "</mark></h1>";
    ?>
  </div>

  <div id="container">
    <!--Zone de modification-->
    <?php
    $reponse = " ";
    $reponse = $pdo->query('SELECT * FROM `user`');
    ?>
    <!--Récupérer d'un form les données à ajouter-->
    <form action="../action/modifier_utilisateur.php" method="POST">
      <h2 id=modifier>Modifier un utilisateur</h2>

      <label><b>Nom d'utilisateur</b></label><br>
      <select id="username" name="username" required>
        <?php
      while ($don = $reponse->fetch()) {
      ?>
        <option value="<?php echo ($don['id']) ?>">
          <?php echo ($don['username']); ?>
        </option>
        <?php
      }
        ?>
      </select><br>

      <label><b>Administrateur</b></label><br>
      <select id="admin" name="admin" required>
        <option value=0>Non</option>
        <option value=1>Oui</option>
      </select>

      <input type="submit" id='submit' value='Modifier'>

      <?php
  if (isset($_GET['erreur'])) {
    $err = $_GET['erreur'];
    if ($err == 1 || $err == 2 || $err == 3) {
      echo "Utilisateur, mot de passe incorrect ou Fonction inconnue";
    }
  }
  ?>
    </form>
  </div>

  <div id="container">
    <!--Zone de retrait-->
    <?php
    $reponse2 = " ";
    $reponse2 = $pdo->query('SELECT * FROM `user`');
    ?>
    <!--Récupérer d'un form les données à ajouter-->
    <form action="../action/retirer_utilisateur.php" method="POST">
      <h2 id=retirer>Retirer un utilisateur</h2>

      <label><b>Nom de l'utilisateur à retirer</b></label>
      <select id="username" name="id" required>
        <?php
        while ($don = $reponse2->fetch()) {
        ?>
        <option value="<?php echo ($don['id']) ?>">
          <?php echo ($don['username']); ?>
        </option>
        <?php
        }
        ?>
      </select><br>

      <input type="submit" id='submit' value='Retirer'>

      <?php
      if (isset($_GET['erreur'])) {
        $err = $_GET['erreur'];
        if ($err == 1) {
          echo "Utilisateur inconnu";
        }
      }
      ?>
    </form>
  </div>
  <?php/*}else{ 
  header('Location: ../img/sortie/comment_ca_mon_reuf.png');
} */?>


</body>
<script src="../js/jquery.min.js"></script>
<script src="../js/materialize.min.js"></script>
<script src="../js/script.js"></script>

</html>