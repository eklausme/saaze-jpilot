<?php require SAAZE_PATH . "/templates/top-layout.php"; ?>

	<main>
<p class=dimmedColor><?= date('jS F Y', strtotime($entry['date'])) ?></p>
<h1><?= $entry['title'] ?></h1>	

<article>
	<?php eval( '?>' . str_replace('?%3E*','?>',str_replace('*%3C?','<?',$entry['content'])) ); ?>
</article>
	<br><br><p>
<?php if (isset($entry['author'])) { ?>
	<br><strong>Author: </strong><?= implode(", ", (array)($entry['author'])) . "\n" ?>
<?php } ?>
	</p>
	</main>

<?php require SAAZE_PATH . "/templates/bottom-layout.php"; ?>
