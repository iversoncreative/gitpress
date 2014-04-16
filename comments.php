<hr />

<section id="comments">

<?php
  if ( !empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) :
?>
<p><?php _e('Enter your password to view comments.'); ?></p>
<?php return; endif; ?>

<h3><?php comments_number(__('No Comments Yet'), __('1 Comment'), __('% Comments')); ?></h3>

<?php if ( $comments ) : ?>
<div id="commentlist">

<?php foreach ($comments as $comment) : ?>
	<div class="row" id="comment-<?php comment_ID() ?>">
		<div class="col-lg-2 col-sm-3 col-xs-2">
			<?php echo get_avatar( $comment, 100 ); ?>
		</div>
		<div class="col-lg-10 col-sm-9 col-xs-10">
			<?php comment_text() ?>
			<p class="text-muted"><small><?php comment_type(__('Comment'), __('Trackback'), __('Pingback')); ?> <?php _e('by'); ?> <?php comment_author_link() ?> &#8212; <?php comment_date() ?> @ <a href="#comment-<?php comment_ID() ?>"><?php comment_time() ?></a> <?php edit_comment_link(__("Edit This"), ' | '); ?></small></p>
		</div>
	</div>
<?php endforeach; ?>

</div>

<?php endif; ?>

<?php if ( comments_open() ) : ?>
<hr />
<h3 id="postcomment"><?php _e('Leave a comment'); ?></h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), get_option('siteurl')."/wp-login.php?redirect_to=".urlencode(get_permalink()));?></p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p><?php printf(__('Logged in as %s.'), '<a href="'.get_option('siteurl').'/wp-admin/profile.php">'.$user_identity.'</a>'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>"><?php _e('Logout &raquo;'); ?></a></p>

<?php else : ?>

<p><label for="author"><small><?php _e('Name'); ?> <?php if ($req) _e('(required)'); ?></small></label><input type="text" name="author" id="author" class="form-control" value="<?php echo $comment_author; ?>" size="22" tabindex="1" /></p>

<p><label for="email"><small><?php _e('Mail (will not be published)');?> <?php if ($req) _e('(required)'); ?></small></label><input type="text" name="email" id="email" class="form-control" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" /></p>

<p><label for="url"><small><?php _e('Website'); ?></small></label><input type="text" name="url" id="url" class="form-control" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" /></p>

<?php endif; ?>

<p><label for="comment"><small><?php _e('Comment'); ?></small></label><textarea name="comment" id="comment" class="form-control" rows="10" tabindex="4"></textarea></p>

<p class="text-muted"><small><strong>HTML:</strong> <?php printf(__('You can use these tags: %s'), allowed_tags()); ?></small></p>

<p><input name="submit" type="submit" id="submit" class="btn btn-default btn-lg" tabindex="5" value="<?php echo attribute_escape(__('Submit Comment')); ?>" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<hr />

<p><small><?php comments_rss_link(__('<abbr title="Really Simple Syndication">RSS</abbr> feed for comments on this post.')); ?>
<?php if ( pings_open() ) : ?>
	<a href="<?php trackback_url() ?>"><?php _e('TrackBack <abbr title="Universal Resource Locator">URL</abbr>'); ?></a>
<?php endif; ?>
</small></p>

<?php endif; // If registration required and not logged in ?>

<?php else : // Comments are closed ?>
<p><?php _e('Sorry, the comment form is closed at this time.'); ?></p>
<?php endif; ?>

</section>