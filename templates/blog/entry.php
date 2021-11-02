<?php require SAAZE_PATH . "/templates/top-layout.php"; ?>

	<div class=blogarea>
<p class=dimmedColor><?= date('jS F Y', strtotime($entry['date'])) ?></p>
<h1><?= $entry['title'] ?></h1>	

<div><?= $entry['content'] ?></div>
	</div>

<?php require SAAZE_PATH . "/templates/bottom-layout.php"; ?>
