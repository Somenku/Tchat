<?php
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Enko|Connect</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Prénom</label>
            <input type="text" name="fname" placeholder="Prénom" required>
          </div>
          <div class="field input">
            <label>Nom</label>
            <input type="text" name="lname" placeholder="Nom" required>
          </div>
        </div>
        <div class="field input">
          <label>Adresse Mail</label>
          <input type="text" name="email" placeholder="Email..." required>
        </div>
        <div class="field input">
          <label>Mot de Passe</label>
          <input type="password" name="password" placeholder="Mot de Passe" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Avatar</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
