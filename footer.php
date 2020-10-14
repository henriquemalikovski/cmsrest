<footer>
	<nav class="nav-footer">
		<?php
		$args = array(
			'menu' => 'Principal',
			'container' => false
		);
		wp_nav_menu($args);
		?>
	</nav>

	<p>Rest © 2015. Alguns direitos reservados.</p>
</footer>
<?php wp_footer(); ?>
</body>

</html>