
	<footer>
		<p class="blogarea dimmedColorSansSerif"><br><br>&copy; Judd Montgomery, last generated <?= date('d-M-Y H:i:s P') ?> GMT using <a href=https://github.com/eklausme/saaze>Simplified Saaze</a><br><br></p>

		<center>
		<a href="mailto&#58;Judd Montgomery &#60;judd@engineer.com&#62" title="Judd Montgomery" target="_blank"><img src="<?=$rbase.'/img/Email-icon32.png'?>" width="32" height="32" alt="Email logo"></a>
		<a href="https://linkedin.com/in/juddmontgomery" title="Judd Montgomery on LinkedIn" target="_blank"><img src="<?=$rbase.'/img/linkedin-icon32.png'?>" width="32" height="32" alt="LinkedIn logo"></a>
		<a href="https://github.com/juddmon" title="Judd Montgomery on Github" target="_blank"><img src="<?=$rbase.'/img/GitHub-Mark-32px.png'?>" width="32" height="32" alt="GitHub logo"></a>
		<a href="<?=$rbase.'/feed.xml'?>" title="Atom/RSS feed"><img src="<?=$rbase.'/img/rss-icon32.png'?>" width=32 height=32 alt="RSS logo"></a>
		</center>
	</footer>

</body>

<?php if (!isset($pagination) && isset($entry['prismjs'])) { ?>
	<script src="https://unpkg.com/prismjs@v1.24.0/components/prism-core.min.js"></script>
	<script src="https://unpkg.com/prismjs@v1.24.0/plugins/autoloader/prism-autoloader.min.js"></script>
	<script src="https://unpkg.com/prismjs@v1.24.0/plugins/line-numbers/prism-line-numbers.min.js"></script>
<?php } ?>

</html>

