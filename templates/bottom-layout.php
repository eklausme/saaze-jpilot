
	<footer>
		<p class="dimmedColorSansSerif"><br><br>&copy; Judd Montgomery, <?php
			printf("generated %s CET (Europe/Berlin) using <a href=\"%s\">Simplified Saaze</a>%s%s<br><br>\n",
				date('d-M-y H:i'), '/blog/2021/10-31-simplified-saaze',
				getenv('NON_NGINX') ? '' : ', served by <a href="https://nginx.org">NGINX</a>',
				isset($_SERVER['REQUEST_TIME_FLOAT']) ? sprintf(", rendered in %.2f ms",1000 * (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'])) : ''
			);
			?></p>

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

