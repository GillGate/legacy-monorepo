<div class="partners">
	<?php foreach(getPartners() as $partner) { ?>
		<div>
			<div class="partners__item">
				<div class="partners__img">
					<img src="<?php echo $partner['img']; ?>" loading="lazy" alt="<?php echo $partner['name']; ?>'s logo">
				</div>
				<div class="partners__name"><?php echo $partner['name']; ?></div>
				<div class="partner__desc"><?php echo $partner['desc']; ?></div>
			</div>
		</div>
	<?php } ?>
</div>