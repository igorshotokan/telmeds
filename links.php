<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die('Por favor no cargue esta p&aacute;gina directamente. &iexcl;Gracias!'); } ?>
<?php
/*
Template Name: Enlaces
*/
?>
<?php get_header();?>
<?php get_telmeds_head();?>
	<div id="cuerpo">
		<div class="wrapper">
			<div id="singletext" class="contenedor">
				<ul id="singletxt">
					<li><a href="<?php bloginfo('url');?>/">Inicio</a></li>
					<li class="ui-tabs-selected"><a href="item-1">Enlaces</a></li>
				</ul>
				<div id="item-1" class="tabdiv">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1 id="lastArchivs"><?php the_title(); ?></h1>
<ul id="enlaces"><?php wp_list_bookmarks( 'show_images=TRUE&show_name=TRUE' ); ?></ul>
<p><?php edit_post_link(' Editar la entrada','','.'); ?></p>
<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div><!-- termina cuerpo -->
<?php get_footer();?>
