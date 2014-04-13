<!DOCTYPE html>
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
			text-align: center;

}
		#header
{
		border: 1px solid #000;
		width: 100%;
		height: 150px;
		margin-right: 10px;
		min-width: 837px;
		overflow: hidden;
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
		width: 740px;
		min-height: 600px;
		height: 100%;
		overflow: hidden;
		border-radius: 6px;
	box-shadow: 0px 0px 50px rgba(0,0,0,0.5);
}
		#bottom
{
		margin-top: 10px;
		float: left;
		width: 100%;
		height: 15px;
		overflow: hidden;
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
<h1>Installation</h1>
<p>Installation de la base de donnée</p>
</div>
<div id ="body">
<body background= "http://st.gdefon.com/wallpapers_original/wallpapers/352547_kosmos_planety_tumannost_cveta_asteroidy_svechenie_2560x1600_(www.GdeFon.ru).jpg" width="100%">
<div id ="body-result">
<form method="POST" action="install.php">
<h2>Requis:</h2>
IP:<br><input type="text" name="ip" value="localhost" />
<br>
Login:<br><input type="text" name="login" value ="root" />
<br>
Password:<br><input type="password" name="passwd" />
<br>
<input class ="connexion" type="submit" name="create" value="Create" />
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
</div
</div>
<div id ="bottom">
<span>©  2014 npineau & ivannere & tbourgeo</span>
</div>
</body>
</html>

