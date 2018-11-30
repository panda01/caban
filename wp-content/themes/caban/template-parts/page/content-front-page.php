<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
	<?php
		$modules = (get_fields(get_the_ID()));
		foreach($modules as $module_name => $module_items):
	?>
		<div class="module container <?= $module_name ?>">
			<?php include(locate_template('template-parts/modules/' . $module_name . '.php')) ?>
		</div>
	<?php endforeach; ?>

<pre><?php print_r(get_fields(get_the_ID())); ?></pre>
