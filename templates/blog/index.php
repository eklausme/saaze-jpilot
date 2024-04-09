<?php
$title = "{$collection['title']} (Page {$pagination['currentPage']})";
require SAAZE_PATH . "/templates/top-layout.php";
?>

<main>
<?php foreach ($pagination['entries'] as $entry) { ?>
	<article>
<?php if (isset($entry['title'])) { ?>
	<h2><a href="<?= $rbase . $entry['url'] ?>"><?= $entry['title'] ?></a></h2>
<?php } ?>
<?php if (isset($entry['date'])) { ?>
	<p class=dimmedColor><?= date('jS F Y', strtotime($entry['date'])) ?></p>
<?php } ?>
	<p><?= $entry['excerpt'] ?></p>
	</article>
<?php } ?>
</main>

<aside>
	<?php if ($pagination['nextUrl']) { ?>
	<a href="<?= $rbase . $pagination['nextUrl'] ?>">&larr; Older</a> &nbsp; &nbsp; &nbsp;
	<?php } ?>
	<?php if ($pagination['prevUrl']) { ?>
	<a href="<?= $rbase . $pagination['prevUrl'] ?>">Newer &rarr;</a>
	<?php } ?>
</aside>

<?php require SAAZE_PATH . "/templates/bottom-layout.php"; ?>
