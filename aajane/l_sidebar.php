<div id="l_sidebar">
	<ul class="sidebar_list">
	<li class="widget">
	
			<?php include (TEMPLATEPATH . '/save_the_date.php'); ?>

	</li>
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar(1)) : ?>
		<li class="widget">
			<h2>Categories</h2>
			<ul>
				<?php wp_list_cats('sort_column=name'); ?>
			</ul>
		</li>
		<li class="widget">
			<h2>Archives</h2>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
		</li>
		<li class="widget">
			<h2>Photos</h2>
		<!-- Start of Flickr Badge -->
			<style type="text/css">
			#flickr_badge_source_txt {padding:0; font: 11px Arial, Helvetica, Sans serif; color:#999999;}
			#flickr_badge_icon {display:block !important; margin:0 !important; border: 1px solid rgb(0, 0, 0) !important;}
			#flickr_icon_td {padding:0 5px 0 0 !important;}
			.flickr_badge_image {text-align:center !important;}
			.flickr_badge_image img {border: 1px solid black !important;}
			#flickr_badge_uber_wrapper {width:150px;}
			#flickr_www {display:block; text-align:center; padding:0 10px 0 10px !important; font: 11px Arial, Helvetica, Sans serif !important; color:#3993ff !important;}
			#flickr_badge_uber_wrapper a:hover,
			#flickr_badge_uber_wrapper a:link,
			#flickr_badge_uber_wrapper a:active,
			#flickr_badge_uber_wrapper a:visited {text-decoration:none !important; background:inherit !important;color:#003366;}
			#flickr_badge_wrapper {}
			#flickr_badge_source {padding:0 !important; font: 11px Arial, Helvetica, Sans serif !important; color:#999999 !important;}
			</style>
			<table id="flickr_badge_uber_wrapper" cellpadding="0" cellspacing="10" border="0"><tr><td><a href="http://www.flickr.com" id="flickr_www">www.<strong style="color:#3993ff">flick<span style="color:#ff1c92">r</span></strong>.com</a><table cellpadding="0" cellspacing="10" border="0" id="flickr_badge_wrapper">
			<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?show_name=1&count=5&display=random&size=t&layout=v&context=in%2Fpool-aajane%2F&source=group&group=674996%40N23"></script>
			<tr>
			<td id="flickr_badge_source" valign="center" align="center">
			<table cellpadding="0" cellspacing="0" border="0"><tr>
			<td width="10" id="flickr_icon_td"><a href="http://www.flickr.com/groups/aajane/pool/"><img id="flickr_badge_icon" alt="photos in AAJA New England" src="http://l.yimg.com/www.flickr.com/images/buddyicon.jpg#674996@N23" align="left" width="48" height="48"></a></td>
			<td id="flickr_badge_source_txt">More <a href="http://www.flickr.com/groups/aajane/pool/">photos in AAJA New England</a></td>
			</tr></table>
			</td>
			</tr>
			</table>
			</td></tr></table>
			<!-- End of Flickr Badge -->
			<p>Join AAJANE Flickr group</p>
		</li>
		<!--<li class="widget">
			<h2>Admin</h2>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<li><a href="http://www.wordpress.org/">WordPress</a></li>
				<?php wp_meta(); ?>
				<li><a href="http://validator.w3.org/check?uri=referer">XHTML</a></li>
			</ul>
		</li>
		-->
		<?php endif; ?>
	</ul>
</div>