<?php
/**
 * Header Template
 *
 * @author: Alex Standiford
 * @date  : 12/21/19
 * @var Theme\Abstracts\Template $template
 */

if ( ! theme()->templates()->is_valid_template( $template ) ) {
	return;
}
?>

</div><!-- #content -->

<footer>
	<small><em>Love What You Do.</em></small>
</footer>

<?php wp_footer(); ?>

</body>
</html>
