
<?php
/*
Template Name: Special Layout
*/

get_header();
?>
<h4 class="info-box">Essa pagina contem um template especial. Esse template pode ser repetido para diversas paginas.</h4>
<p>=]</p>
<?php
if(have_posts()){
	
	while(have_posts()){
	the_post();
	?>	
		<article class='post page'> 
			<h2><?php the_title();?></h2>
			
			
			
			
			<h3><?php the_content();?></h3>
		</article>
	<?php
	}
	
}else{
	
	echo 'sem conteúdo';
	
}

get_footer();

?>