 <?php
	$link_url = thb_get_post_meta( get_the_ID(), 'link_url' );
?>

<a class="linkurl" href="<?php echo $link_url; ?>" title="<?php the_title(); ?>">
	<?php echo $link_url; ?>
</a>

<div class="item-wrapper">
	<header class="item-header">
		<h1>
			<a href="<?php the_permalink(); ?>" rel="permalink"><?php the_title(); ?></a>
		</h1>
		<time pubdate class="pubdate">
			<?php echo get_the_date(); ?>
		</time>
	</header>

	<?php if( get_the_excerpt() != '' ) : ?>
		<div class="text">
			<?php the_excerpt(); ?>
		</div>
	<?php endif; ?>

	<footer class="item-footer">
		<span class="comments" data-icon="i"><a href="<?php comments_link(); ?>"><?php thb_comments_number(); ?></a></span>
		<span class="thb-format-icon"><?php thb_get_post_icon(get_the_ID()); ?></span>
	</footer>
</div>