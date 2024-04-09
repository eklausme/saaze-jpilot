<?php require SAAZE_PATH . "/templates/top-layout.php"; ?>

	<main>
<p class=dimmedColor><?= date('jS F Y', strtotime($entry['date'])) ?></p>
<h1><?= $entry['title'] ?></h1>	

<article><?php
	/*$entry['content']*/
	$s = str_replace('*%3C?','<?',$entry['content']);
	$s = str_replace('?%3E*','?>',$s);
	require 'data:text/plain;base64,'.base64_encode($s);
?></article>
	<br><br><p>
<?php if (isset($entry['author'])) { ?>
	<br><strong>Author: </strong><?= implode(", ", (array)($entry['author'])) . "\n" ?>
<?php } ?>
	</p>
	</main>

<?php require SAAZE_PATH . "/templates/bottom-layout.php"; ?>
