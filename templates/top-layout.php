<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?= $title ?? "Simplified Saaze" ?></title>

<?php if (isset($entry['prismjs'])) { ?>
	<link href="https://unpkg.com/prismjs@v1.24.0/themes/prism.css" rel="stylesheet" />
	<link href="https://unpkg.com/prismjs@v1.24.0/plugins/line-numbers/prism-line-numbers.css" rel="stylesheet" />
<?php } ?>
	<link href=/blogklm.css rel=stylesheet>

</head>

<body class="line-numbers">
	<header> 
		<nav id=hamnav>	<!-- (A) MENU WRAPPER -->
		<label for=hamburger>&#9776;</label><!-- (B) THE HAMBURGER -->
			<input type=checkbox id=hamburger />
		<div id=hamitems>	<!-- (C) MENU ITEMS -->
			<a href=<?= $rbase ?>/blog>Blog</a>
			<a href=<?= $rbase ?>/music>Music</a>
		</div>
		</nav>
	</header>

