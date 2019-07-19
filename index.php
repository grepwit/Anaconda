<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>
	<link rel="stylesheet" href="<?php echo theme_url('/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo theme_url('/css/styles.css'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
	<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">
	<style>
	.bg-cover {
		background-image: url(<?php echo theme_url('/img/bg2.png'); ?>);
	}
	.bg-cover:after {
		background: rgba(0,0,0, 0.3);
	}
	</style>
	<?php if(customised()): ?>
    <style><?php echo article_css(); ?></style>
    <script><?php echo article_js(); ?></script>
	<?php endif; ?>
</head>
<body>

<header id="header" class="bg-cover">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">
					Anaconda Theme
				</a>

				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
				<?php if(has_menu_items()):
					while(menu_items()): ?>
					<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
						<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
							<?php echo menu_name(); ?>
						</a>
					</li>
					<?php endwhile;
				endif; ?>
				</ul>
			</div>
		</div>
	</nav>

	<div class="jumbotron">
		<div class="container text-center">
			<h1>Maecenas malesuada.</h1>
			<p>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies.</p>
		</div>
	</div>
</header>

<section class="container" id="content">
	<div class="row">
		<div class="col-md-7">
			<article>
				<header>
					<h2>Lorem ipsum dolor sit amet enim. Etiam ullamcorper.</h2>
					<div class="meta clearfix">
						<p class="pull-left">
							Napisał: Piotr Filipek, 15 maja 2015
						</p>

						<div class="share-area pull-right">
							<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button"></div>
						</div>
					</div>
				</header>

				<p>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum in, dolor.</p>
				<p>Pellentesque facilisis. Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit, rhoncus eu, luctus et interdum adipiscing wisi. Aliquam erat ac ipsum. Integer aliquam purus. Quisque lorem tortor fringilla sed, vestibulum id, eleifend justo vel bibendum sapien massa ac turpis faucibus orci luctus non, consectetuer lobortis quis, varius in, purus. Integer ultrices posuere cubilia Curae, Nulla ipsum dolor lacus, suscipit adipiscing. Cum sociis natoque penatibus et ultrices volutpat.</p>
				
				<div class="keep-reading">
					<a href="#">Kontynuuj czytanie &raquo;</a>
				</div>
			</article>

			<article>
				<header>
					<h2>Lorem ipsum dolor sit amet enim. Etiam ullamcorper.</h2>
					<div class="meta">
						<p>Napisał: Piotr Filipek, 15 maja 2015</p>
					</div>
				</header>

				<p>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum in, dolor.</p>
				<p>Pellentesque facilisis. Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit, rhoncus eu, luctus et interdum adipiscing wisi. Aliquam erat ac ipsum. Integer aliquam purus. Quisque lorem tortor fringilla sed, vestibulum id, eleifend justo vel bibendum sapien massa ac turpis faucibus orci luctus non, consectetuer lobortis quis, varius in, purus. Integer ultrices posuere cubilia Curae, Nulla ipsum dolor lacus, suscipit adipiscing. Cum sociis natoque penatibus et ultrices volutpat.</p>
				
				<h3>Podsumowanie...</h3>
				<p>Nullam wisi ultricies a, gravida vitae, dapibus risus ante sodales lectus blandit eu, tempor diam pede cursus vitae, ultricies eu, faucibus quis, porttitor eros cursus lectus, pellentesque eget, bibendum a, gravida ullamcorper quam. Nullam viverra consectetuer. Quisque cursus et, porttitor risus. Aliquam sem. In hendrerit nulla quam nunc, accumsan congue. Lorem ipsum primis in nibh vel risus. Sed vel lectus. Ut sagittis, ipsum dolor quam.</p>

				<div class="tags">
					<ul>
						<li><a href="#">#css3</a></li>
						<li><a href="#">#html5</a></li>
						<li><a href="#">#javascript</a></li>
						<li><a href="#">#theme</a></li>
					</ul>
				</div>
			</article>
		</div>

		<div class="col-md-5">
			<div class="box">
				<h3>Ostatnio dodane</h3>
				<ul>
					<li><a href="#">Lorem ipsum dolor sit amet enim.</a></li>
					<li><a href="#">Suspendisse a pellentesque dui, non felis.</a></li>
				</ul>
			</div>

			<div class="box">
				<h3>Polecane strony</h3>
				<ul>
					<li><a href="#">Anchor - blogging system</a></li>
					<li><a href="#">Anchor Showcase - great sites made using Anchor CMS.</a></li>
					<li><a href="http://twitter.com/danoxide">@danoxide (Peter Filipek)</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<footer class="container-fluid" id="footer">
	<div class="text-center">
		<p>Copyrights &copy; by Anaconda. Theme by <a href="https://twitter.com/danoxide">Piotr Filipek</a>.</p>
		<p>Made with <span class="heart"></span> somewhere in the Internet.</p>
	</div>
</footer>

<div id="fb-root"></div>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$(function(){
	
});
</script>
<script>
// Facebook share
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&version=v2.3";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
</body>
</html>
