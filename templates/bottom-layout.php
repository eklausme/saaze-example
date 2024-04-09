
	<footer>
		<p class="blogarea dimmedColorSansSerif"><br><br>Last generated <?= date('d-M-Y H:i:s P') ?> GMT using <a href=https://github.com/eklausme/saaze>Simplified Saaze</a><?=
			isset($_SERVER['REQUEST_TIME_FLOAT']) ? sprintf(", rendered in %.2f ms",1000 * (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'])) : ''
		?><br><br></p>
	</footer>

</body>

<?php if (isset($entry['MathJax'])) { ?>
	<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
	<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
<?php } ?>
<?php if (isset($entry['TikTok'])) { ?>
	<script async src="https://www.tiktok.com/embed.js"></script>
<?php } ?>
<?php if (isset($entry['Twitter'])) { ?>
	<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<?php } ?>
<?php if (isset($entry['Mermaid'])) { ?>
	<script src="https://cdn.jsdelivr.net/npm/mermaid/dist/mermaid.min.js"></script>
	<script>mermaid.initialize({startOnLoad:true});</script>
<?php } ?>
<?php if (!isset($pagination) && isset($entry['prismjs'])) { ?>
	<script src="https://unpkg.com/prismjs@v1.29.0/components/prism-core.min.js"></script>
	<script src="https://unpkg.com/prismjs@v1.29.0/plugins/autoloader/prism-autoloader.min.js"></script>
	<script src="https://unpkg.com/prismjs@v1.29.0/plugins/line-numbers/prism-line-numbers.min.js"></script>
<?php } ?>

</html>
