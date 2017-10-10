

<?php

get_header();

if(have_posts()){
	
	while(have_posts()){
	the_post();
	?>	
		<article class='post'>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
			<h5 class='post-info''><?php the_time('F jS, Y'); ?> | Por <a href='<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>'><?php the_author(); ?></a></h5></p>
			<p><?php the_content();?></p>
		</article>
	<?php
	}
	
}else{
	
	echo 'sem conteúdo';
	
}

get_footer();

?>