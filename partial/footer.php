<footer class="container-fluid" id="footer">
	<div class="text-center">
		<p>Copyrights &copy; by <?php echo site_name(); ?>. Theme by <a href="https://twitter.com/danoxide">@danoxide</a></p>
		<p>Made with <span class="heart"></span> somewhere in the Internet.</p>
	</div>
</footer>

<div id="fb-root"></div>
<script src="<?php echo theme_url('js/bootstrap.min.js'); ?>"></script>
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
	js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.3";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
</body>
</html>