<div class="row">
	<h2 class="main_title col-desktop-6 offset-desktop-3 text_align_center">
		<?= $module_items['headline']; ?>
	</h2>
	<div class="col-desktop-12"></div>
	<h5 class="subtext col-desktop-6 offset-desktop-3 text_align_center">
		<?= $module_items['subtext']; ?>
	</h5>
	<div class="col-desktop-12"></div>
	<div class="cabinet_wrapper col-desktop-12 text_align_center">
		<img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/caban-int-07.png" class="cabinet" />
	</div>
	<div class="col-desktop-2 offset-desktop-4 text_align_center">
		Exterior
	</div>
	<div class="col-desktop-2 text_align_center">
		Interior
	</div>
	<div class="col-desktop-12"></div>
	<div class="features_wrap">
		<?php for($i = 1; $i <= 4; $i++): ?>
			<div class="feature col-desktop-3">
				<div class="icon_wrapper text_align_center">
					<img src="<?= get_stylesheet_directory_uri() . $module_items['info_pic_' . $i]; ?>" class="icon" />
				</div>
				<h4 class="title text_align_center"><?= $module_items['info_title_' . $i] ?></h4>
				<p class="text_align_center"><?= $module_items['info_subtext_' . $i] ?></p>
			</div>
		<?php endfor; ?>
	</div>
	<a href="#" class="btn green col-desktop-4 offset-desktop-4">see how it works</a>
</div>
