<?php
	
	// Page settings (override defaults in config/website.php)
	$page_title = "Slide";
	$page_h1 = "Test: Slide";
	
?>
<h1><?php echo e($page_h1) ?></h1>
<p>
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien justo, sagittis lacinia tortor. Etiam et est vel turpis condimentum faucibus. Curabitur adipiscing mollis felis in convallis. Aliquam erat volutpat. Fusce convallis fringilla ante, at iaculis neque interdum a. Sed nec enim in purus lobortis tempor ac nec lectus. Aenean eget nunc eros. Fusce tempor lacus aliquet quam lacinia fermentum.
</p>

<!-- [Slideshow Responsive] -->
<div id="slide-rslides">
	<ul class="rslides">
		<?php	for ($x=1; $x<=4; $x++) : ?>
		<li>
			<img src="img/_test/slide/<?php echo $x; ?>.jpg" alt="#" />
			<div class="slide-caption">
				<div class="slide-content">
					<strong>Slide <?php echo $x; ?></strong> 
					Lore ipsa ipsum is dummy text that I use here as an example
				</div>
			</div>
		</li>
		<?php endfor; ?>
	</ul>	
</div>	
<!-- [/End Slideshow Responsive] -->