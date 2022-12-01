<?php require "../action/database.php"; ?>
<html>

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
  <?php require "adminnav.php"; ?>

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
    <form action="admin_add_user.php" method="POST">
      <h2 id=ajouter>Ajouter un utilisateur</h2>

      <label><b>Nom d'utilisateur</b></label>
      <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

      <label><b>Mot de passe</b></label>
      <input type="password" placeholder="Entrer le mot de passe" name="password" required>

      <label><b>Email</b></label><br>
      <input type="email" placeholder="Entrer votre email" name="email" required>

      <label><b>Administrateur</b></label><br>
      <select id="admin" name="administrateur" required>
        <option value=0>Non</option>
        <option value=1>Oui</option>
      </select>

      <input type="submit" id='submit' value='Ajouter'>

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
    <!--Zone de modification-->
    <?php
    $reponse = " ";
    $reponse = $pdo->query('SELECT * FROM `user`');
    ?>
    <!--Récupérer d'un form les données à ajouter-->
    <form action="admin_modify_user.php" method="POST">
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
  </div>
  </select><br>

  <label><b>Mot de passe</b></label>
  <input type="password" placeholder="Entrer le mot de passe" name="password" required>

  <label><b>Email</b></label><br>
  <input type="email" placeholder="Entrer votre email" name="email" required>

  <label><b>Administrateur</b></label><br>
  <select id="admin" name="administrateur" required>
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
    <form action="admin_remove_user.php" method="POST">
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

  <script src="../js/jquery.min.js"></script>
  <script src="../js/materialize.min.js"></script>
  <script src="../js/script.js"></script>
</body>

</html>