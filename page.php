<?php theme_include('partial/header'); ?>

<section class="container" id="content">
	<div class="row">
		<div class="col-md-7">
			<article>
				<header>
					<h2><?php echo page_title(); ?></h2>
				</header>

				<?php echo page_content(); ?>
			</article>
		</div>

		<?php theme_include('partial/aside'); ?>
	</div>
</section>

<?php theme_include('partial/footer'); ?>