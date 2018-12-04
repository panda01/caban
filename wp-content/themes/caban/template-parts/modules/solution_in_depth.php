<div class="row">
	<div class="col-desktop-6">
		<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/solar_panels.png" />
	</div>
	<div class="col-desktop-6">
		<h2 class="main_title"><?= $module_items['main_title'] ?></h2>
		<h5 class="main_summary"><?= $module_items['main_summary'] ?></h5>
		<div class="row facts">
			<div class="col-desktop-2"></div>
			<?php for($i = 1; $i <= 2; $i++): ?>
				<div class="fact col-desktop-4">
					<h1 class="big_number text_align_center">
						<?= $module_items[$i . '_data_point_big_number'] ?>
					</h1>
					<h4 class="summary text_align_center">
						<?= $module_items[$i . '_data_point_summary'] ?>
					</h4>
				</div>
			<?php endfor; ?>
		</div>
	</div>
	<div class="col-desktop-5">
		<h3><?= $module_items['secondary_title'] ?></h3>
		<h5><?= $module_items['secondary_summary'] ?></h5>
	</div>
	<div class="col-desktop-7">
		<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/caban-tech.png" />
	</div>
</div>
