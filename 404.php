<?php theme_include('partial/header'); ?>

<section class="container" id="content">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 text-center">
			<article>
				<header>
					<h2>Page not found...</h2>

					<p>Unfortunately, the page <code>/<?php echo htmlspecialchars(current_url()); ?></code> could not be found. Your best bet is either to try the <a href="<?php echo base_url(); ?>">homepage</a> or go and cry in a corner (although I don’t recommend the latter).</p>
				</header>

				<?php echo article_html(); ?>
			</article>
		</div>
	</div>
</section>

<?php theme_include('partial/footer'); ?>
