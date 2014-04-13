<!DOCTYPE html>
<html>
  <head>
    <title>Warhammer 42K</title>
    <meta charset ="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div id="header">
      <h1>SQL Setup</h1>
    </div>
    <div id="body">
      <body background="bg.jpg" width="100%">
        <div id ="body-result">
          <form method="POST" action="install.php">
            <h2>Required</h2>
              <input type="text" name="ip" placeholder="IP" value="localhost">
              <br>
              <input type="text" name="login" placeholder="Login" value ="root">
              <br>
              <input type="password" placeholder="Password" name="passwd">
              <br>
              <input class="connexion" type="submit" name="create" value="Create">
          </form>
          <?php
            if($ip = isset($_POST['ip']) && $login = isset($_POST['login']) && $passwd = isset($_POST['passwd']))
            {
              $mysqli = mysqli_connect($_POST['ip'], $_POST['login'], $_POST['passwd']);
              file_put_contents("config.php", "<?php\n\$ip = '".$_POST['ip']."';\n\$login = '".$_POST['login']."';\n\$passwd = '".$_POST['passwd']."';\n?>\n");
              include("create_table.php");
              create_db();
            }
          ?>
        </div>
      </div>
    <div id ="bottom">
      <span>&copy; 2014 npineau &amp; ivannere &amp; tbourgeo</span>
    </div>
  </body>
</html>
