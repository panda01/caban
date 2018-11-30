<div class="problem_img_wrapper"></div>
<div class="row inner_wrap">
	<?php for($i = 1; $i <= 3; $i++): ?>
		<div class="col-desktop-4">
			<h1 class="big_number"><?php echo $module_items['big_number_' . $i] ?></h1>
			<h5 class="copy"><?php echo $module_items['info_text_' . $i] ?></h5>
		</div>
	<?php endfor; ?>
</div>
