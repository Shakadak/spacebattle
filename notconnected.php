<meta charset ="utf-8">
<link rel="stylesheet" type="text/css" href="styles.css">
<div id ="notconnected">
  <?php if (isset($_POST['create'])) : ?>
  <?php if(isset($_POST['username']) && isset($_POST['passwd'])) : ?>
  <?php
    include("config.php");
    $mysqli = mysqli_connect($ip, $login, $passwd, 'rush');
    $username = isset($_POST['username']);
    $passwd = isset($_POST['passwd']);
    $mail = isset($_POST['mail']);
    $check = mysqli_prepare($mysqli, "SELECT id FROM account WHERE login='".$_POST['username']."'");
    mysqli_stmt_execute($check);
    mysqli_stmt_store_result($check);
    mysqli_stmt_num_rows($check);
  ?>
  <?php	if(mysqli_stmt_num_rows($check) == 0 && strlen($_POST['username']) >= 3 && strlen($_POST['passwd']) >= 5 ) : ?>
  <?php
    {
    mysqli_query($mysqli, "INSERT INTO account (`id`, `login`, `passwd`, `mail`, `flag`) VALUES('', '".$_POST['username']."', '".hash("whirlpool", $_POST['passwd'])."', '".$_POST['mail']."', '0')");
  ?>
  <div class ="create-ok">
    <br>
    Account created !<br>
    <br>
    <a href="index.php">Sign in</a>
  </div>
  <?php
    }
  ?>
  <?php elseif(strlen($_POST['username']) < 3 || strlen($_POST['passwd'] < 5)) : ?>
  <?php
    {
  ?>
  <div class ="create-not">
    <br>
    /!\ ERROR
    <br>
    Login must have at least 3 characters.
    <br>
    &amp;
    <br>
    Password must have at least 5 characters.
    <br>
    <a href="index.php">Retour</a>
  </div>
  <?php
    }
    mysqli_stmt_close($check);
    mysqli_close($mysqli);
  ?>
  <?php endif; ?>
  <?php endif; ?>
  <?php else : ?>
  <?php if ( isset( $_GET['create'] ) ) : ?>
  <form method="POST" action="index.php?notconnected.php">
    <h2>Register</h2>
    <input type="text" name="username" placeholder="Login" class="login" value="" />
    <br>
    <input type="password" name="passwd" placeholder="Password" class="passwd" value ="" />
    <br>
    <input type="email" name="mail" class="mail" placeholder="example@42.fr" />
    <br>
    <input class="button" type="submit" name="create" value="Create" />
  </form>
  </div>
  <?php else : ?>
  <form method="POST" action="index.php">
    <h2>Sign in</h2>
    <input type="text" name="username" placeholder="Login" class="login" value="" />
    <br>
    <input type="password" name="passwd" placeholder="Password" class="passwd" value ="" />
    <br>
    <input class ="button" type="submit" name="login" value="Connect" />
  </form>
  <br>
  <a class ="linkcreate" href="?create=true">Register</a>
  <?php endif; ?>
  <?php endif; ?>
</div>
