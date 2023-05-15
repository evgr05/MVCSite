<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Концепция MVC</title>
	<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Концепция MVC</h1>
		<a href="admin">Вход в админ-панель</a>
	<div>
	<?php foreach ($articles as $a): ?>
		<div class="article">
			<h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
			<em>Опубликовано: <?=$a['date']?></em>
			<p><?=$a['content']?></p>
		</div>
	<?php endforeach?>
	</div>
	<footer>
		<p>Концпция MVC<br>Copyright &copy; 2018</p>
	</footer>
</div>
</body>
</html>