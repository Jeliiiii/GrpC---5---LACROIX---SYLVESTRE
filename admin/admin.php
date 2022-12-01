<?php require_once "../action/database.php"; ?>
<html>

<head>
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
      <h2>Ajouter un utilisateur</h2>

      <label><b>Nom d'utilisateur</b></label>
      <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

      <label><b>Mot de passe</b></label>
      <input type="password" placeholder="Entrer le mot de passe" name="password" required>

      <label><b>Fonction</b></label><br>
      <input type="text" placeholder="Entrer oui pour passer en administrateur" name="admin" required>

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
            $reponse = $pdo->query('SELECT username FROM `user`');
            ?>
    <!--Récupérer d'un form les données à ajouter-->
    <form action="admin_modify_user.php" method="POST">
      <h2>Modifier un utilisateur</h2>

      <label><b>Nom d'utilisateur</b></label><br>
      <select id="username" name="username">
        <?php
          while ($don = $reponse->fetch()) {
        ?>
        <option value="<?php echo ($don['username']); ?>">
          <?php echo ($don['username']); ?>
        </option>
        <?php
                    }
                    ?>
      </select><br>

      <label><b>Mot de passe</b></label>
      <input type="password" placeholder="Entrer le mot de passe" name="password" required>

      <label><b>Fonction</b></label><br>
      

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
            $reponse2 = $pdo->query('SELECT username FROM `user`');
            ?>
    <!--Récupérer d'un form les données à ajouter-->
    <form action="admin_remove_user.php" method="POST">
      <h2>Retirer un utilisateur</h2>

      <label><b>Nom de l'utilisateur à retirer</b></label>
      <select id="username" name="username">
        <?php
                    while ($don = $reponse2->fetch()) {
                    ?>
        <option value="<?php echo ($don['username']) ?>">
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
</body>

</html>