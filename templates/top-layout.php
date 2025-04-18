<!DOCTYPE html>
<html lang="en">

<?php $rbase ??= ''; ?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?? "J-Pilot" ?></title>
	<link rel="canonical" href="https://eklausmeier.goip.de/jpilot<?=$url??''?>">

<?php if (isset($entry['prismjs'])) { ?>
	<link href="https://unpkg.com/prismjs@v1.24.0/themes/prism.css" rel="stylesheet" />
	<link href="https://unpkg.com/prismjs@v1.24.0/plugins/line-numbers/prism-line-numbers.css" rel="stylesheet" />
<?php } ?>
	<link href="<?=$rbase?>/jpilot.css" rel=stylesheet>
</head>

<body class="line-numbers">

<div class="navbar">
	<a href="<?=$rbase?>/">Home</a>
	<div class="subnav">
		<button class="subnavbtn">Documentation <i class="fa fa-caret-down"></i></button>
		<div class="subnav-content">
			<a href="<?=$rbase?>/doc/manual_en">User Manual (EN)</a>
			<a href="<?=$rbase?>/doc/manual_de">User Manual (DE)</a>
			<a href="<?=$rbase?>/doc/requirements">Requirements</a>
			<a href="<?=$rbase?>/doc/plugin-manual">Plugin Manual</a>
			<a href="<?=$rbase?>/doc/links">Links</a>
		</div>
	</div> 
	<div class="subnav">
		<button class="subnavbtn">Download <i class="fa fa-caret-down"></i></button>
		<div class="subnav-content">
			<a href="<?=$rbase?>/doc/download">Ubuntu/Debian/Arch</a>
			<a href="<?=$rbase?>/doc/plugins">Plugins</a>
		</div>
	</div> 
	<div class="subnav">
		<button class="subnavbtn">Contact <i class="fa fa-caret-down"></i></button>
		<div class="subnav-content">
			<a href="<?=$rbase?>/doc/mailinglist">Mailing List</a>
			<a href="https://lists.jpilot.org/empathy/list/jpilot.lists.jpilot.org">Forum</a>
		</div>
	</div>
	<a href="<?=$rbase?>/blog">Blog</a>
</div>

<div style="padding:0 16px"></div>


