<?php
echo('<!DOCTYPE html>
<html>
  <head>
    <title>Rush 42</title>
    <meta charset ="utf-8">
    <style type="text/css">
      body
      {
        padding: 0;
        margin-left: auto;
        margin-right: auto;
        width: 90%;
        width: 950px;
        height: 100%;
        background: #eee;
        text-align: center;
        color: #ddd;
      }

      #header
      {
        border: 1px solid #000;
        width: 100%;
        height: 150px;
        margin-right: 10px;
        min-width: 837px;
        overflow: hidden;
        background: #1e1e1e;
        border-radius: 6px;
        box-shadow: 0px 0px 50px rgba(0,0,0,0.5);
      }

      #body
      {
        margin-top: 10px;
        width: 100%
      }
      #body-result
      {
        margin-left: auto;
        margin-right: auto;
        background: #eee;
        width: 740px;
        min-height: 600px;
        height: 100%;
        overflow: hidden;
        background: #1e1e1e;
        border-radius: 6px;
        box-shadow: 0px 0px 50px rgba(0,0,0,0.5);
      }

      #bottom
      {
        background: #eee;
        margin-top: 10px;
        float: left;
        width: 100%;
        height: 15px;
        overflow: hidden;
        background: #1e1e1e;
        border-radius: 6px;
        box-shadow: 0px 0px 50px rgba(0,0,0,0.5);
        font-size: 12px;
        text-align: right;
      }
      #bottom span
      {   
        margin-right: 10px;
      }
    </style>
  </head>
  <body>
    <div id ="header">
      <h1>Administration</h1>
      <p>Bienvenue dans la page d\'administration</p>
      <p>ajout, modiﬁcation, suppression des articles, catégories et utilisateurs.</p>
    </div>
');
	if (isset($_POST['login']))
	{
		if (isset($_POST['username']) && $passwd = isset($_POST['passwd']))
		{
			include("config.php");
			$mysqli = mysqli_connect($ip, $login, $passwd, 'rush');
			$check1 = mysqli_prepare($mysqli, "SELECT id FROM account WHERE login='".$_POST['username']."'");
			mysqli_stmt_execute($check1);
			mysqli_stmt_store_result($check1);
			mysqli_stmt_num_rows($check1);
			$check2 = mysqli_prepare($mysqli, "SELECT id FROM account WHERE passwd='".hash("whirlpool", $_POST['passwd'])."'");
			mysqli_stmt_execute($check2);
			mysqli_stmt_store_result($check2);
			mysqli_stmt_num_rows($check2);
			$check3 = mysqli_query($mysqli, "SELECT flag FROM account where login='".$_POST['username']."'");
			$usr = mysqli_stmt_num_rows($check1);
			$pwd = mysqli_stmt_num_rows($check2);
			$flag = mysqli_fetch_assoc($check3);
		}
		if ($usr == 1 && $pwd == 1 && $flag['flag'] == 1)
		{
			echo('<div id ="body">
<div id ="body-result">
<form method="POST" action="admin.php">
<h2>Connexion:</h2>
Identifiant:<br><input type="text" name="username" value="" />
<br>
Mot de passe:<br><input type="password" name="passwd" value ="" />
<br>
<input class ="connexion" type="submit" name="login" value="Connexion" />
</form>		
</div
</div>
<div id ="bottom">
<span>&copy; 2014 npineau, ivannere &amp; tbourgeo</span>
</div>
</body>
</html>
');
  }
  }
  else
  {
    echo('<div id ="body">
<div id ="body-result">
<form method="POST" action="admin.php">
<h2>Connexion:</h2>
Identifiant:<br><input type="text" name="username" value="" />
<br>
Mot de passe:<br><input type="password" name="passwd" value ="" />
<br>
<input class ="connexion" type="submit" name="login" value="Connexion" />
</form>		
</div
</div>
<div id ="bottom">
<span>©  2014 npineau & ivannere & tbourgeo</span>
</div>
</body>
</html>
');
	}
?>
