<div class="col-md-5" id="aside">
			<div class="box">
				<h3>Recently added</h3>
				<div role="tabpanel">
					<ul class="nav nav-tabs nav-justified" role="tablist" id="recently">
						<li role="presentation" class="active"><a href="#comments_tab" aria-controls="comments_tab" role="tab" data-toggle="tab">Comments</a></li>
						<li role="presentation"><a href="#posts_tab" aria-controls="posts_tab" role="tab" data-toggle="tab">Posts</a></li>
					</ul>

					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="comments_tab">
							<ul>
							<?php foreach(anaconda_comments() as $comment): ?>
								<li><a href="<?php echo full_url().'posts/'.anaconda_post_slug($comment->post); ?>#comments"><?php echo (strlen($comment->text)>30?substr($comment->text, 0, 30).'...':$comment->text) ?></a></li>
							<?php endforeach; ?>
							</ul>
						</div>

						<div role="tabpanel" class="tab-pane" id="posts_tab">
							<ul>
							<?php foreach(anaconda_posts() as $post): ?>
								<li><a href="<?php echo full_url().'posts/'.$post->slug; ?>"><?php echo (strlen($post->title)>30?substr($post->title, 0, 30).'...':$post->title) ?></a></li>
							<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>

				<script>
				$(function(){
					$('#recently a').click(function (e) {
						e.preventDefault();
						$(this).tab('show');
					})
				});
				</script>
			</div>

			<div class="box">
				<h3>Meta</h3>
				<ul>
					<li><a href="<?php echo rss_url(); ?>">RSS</a></li>
					<?php if(twitter_account()): ?>
					<li><a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a></li>
					<?php endif; ?>
					<li><a href="<?php echo base_url('admin'); ?>" title="Administer your site!">Admin area</a></li>
					<li><a href="<?php echo base_url(); ?>" title="Return to my website.">Home</a></li>
				</ul>
			</div>
		</div>