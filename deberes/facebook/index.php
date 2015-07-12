<?
require_once 'app/start.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP SDK</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<h1>PHP Facebook SDK</h1>
<?php if(!isset($_SESSION['facebook'])):?>

<a href="<?php echo $helper->getLoginUrl($config['scopes']); ?>" class="btn btn-primary">Iniciar session con Facebook</a>

<?php else:  ?>

<p>
<pre><?php
var_dump($facebook_user);
?></pre>
Bienvenido, <?php echo $facebook_user->getName(); ?>
</p>

<a href="app/start.php" class="btn btn-danger" ?>Cerrar session con Facebook</a>

<?php
endif;
?>
</body>
</html>

 