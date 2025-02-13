<?php
function pluralise($amount, $str, $alt = '') {
	return intval($amount) === 1 ? $str : $str . ($alt !== '' ? $alt : 's');
}

function relative_time($date) {
	if(is_numeric($date)) $date = '@' . $date;

	$user_timezone = new DateTimeZone(Config::app('timezone'));
	$date = new DateTime($date, $user_timezone);

	// get current date in user timezone
	$now = new DateTime('now', $user_timezone);

	$elapsed = $now->format('U') - $date->format('U');

	if($elapsed <= 1) {
		return 'Just now';
	}

	$times = array(
		31104000 => 'year',
		2592000 => 'month',
		604800 => 'week',
		86400 => 'day',
		3600 => 'hour',
		60 => 'minute',
		1 => 'second'
	);

	foreach($times as $seconds => $title) {
		$rounded = $elapsed / $seconds;

		if($rounded > 1) {
			$rounded = round($rounded);
			return $rounded . ' ' . pluralise($rounded, $title) . ' ago';
		}
	}
}

function anaconda_comments(){
	return Query::table(Base::table(Comment::$table))->where('status', '=', 'approved')->get();
}

function anaconda_posts(){
	return Post::where(Base::table('posts.status'), '=', 'published')->get();
}

function anaconda_post_slug($id) {
	return Post::where(Base::table('posts.id'), '=', $id)->get()[0]->slug;
}

function twitter_account() {
	return site_meta('twitter', 'grepwit');
}

function twitter_url() {
	return 'https://twitter.com/' . twitter_account();
}
