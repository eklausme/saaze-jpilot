<?php require SAAZE_PATH . "/templates/top-layout.php"; ?>

	<div class=blogarea>
<p class=dimmedColor><?= date('jS F Y', strtotime($entry['date'])) ?></p>
<h1><?= $entry['title'] ?></h1>	

<div><?= $entry['content'] ?></div>
	<br><br><p>
<?php if (isset($entry['author'])) { ?>
	<br><strong>Author: </strong><?= implode(", ", (array)($entry['author'])) . "\n" ?>
<?php } ?>
	</p>
	</div>

<?php require SAAZE_PATH . "/templates/bottom-layout.php"; ?>
