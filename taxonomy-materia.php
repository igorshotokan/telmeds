<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die('Por favor no cargue esta p&aacute;gina directamente. &iexcl;Gracias!'); } ?>
<?php get_header();?>
<?php get_telmeds_head();?>
	<div id="cuerpo">
		<div class="wrapper">
			<div id="singletext" class="contenedor">
				<ul id="singletxt">
					<li><a href="<?php bloginfo('url');?>/">Inicio</a></li>
					<li><a href="<?php bloginfo('url');?>/documentos-virtuales/">Documentos Virtuales</a></li>
					<li class="ui-tabs-selected"><a href="#svparchive"><?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); echo $term->name; ?></a></li>
				</ul>
				<div id="svparchive" class="colabdiv">
					<h1>Documentos Virtuales de <?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); echo $term->name; ?> en Telmeds.org</h1>
<?php $odd_or_even = 'odd'; ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php $odd_or_even = ('odd'==$odd_or_even) ? 'colabizq' : 'colabder'; ?>
					<div id="colab-<?php the_ID();?>" class="colab <?php echo $odd_or_even; ?>">
						<a href="<?php if (!empty($post->post_password)) { the_permalink(); } else { echo get_post_meta($post->ID, 'IR_imagen', true); }?>"><img src="<?php bloginfo('template_url');?>/images/icons/<?php $filename = get_post_meta($post->ID, 'IR_imagen', true); if (($pos = strrpos($filename, '.')) === FALSE) echo 'http://www.telmeds.net/wp-content/themes/telmedsv7/images/txt.png' ; else { $extension = substr($filename, $pos + 1); echo $extension; } ?>.png" alt="<?php the_title();?>" /></a>
						<div class="colabcontent">
							<h3><?php echo get_post_meta($post->ID, 'IMS_imagen', true); ?></h3>
							<p>
							<span><a href="<?php if (!empty($post->post_password)) { the_permalink(); } else { echo get_post_meta($post->ID, 'IR_imagen', true); }?>">Descargar</a></span> <?php $values = get_post_custom_values('swf');
$shortcode_output = do_shortcode($values[0]);
print $shortcode_output; ?> <br />
							<span>Por: <?php echo get_post_meta($post->ID, 'autores', true); ?></span><br />
<?php echo get_the_term_list($post->ID, 'materias', '<span>Etiquetado en: ', ', ', '</span><br />'); ?>
							<span>Última modificación: <?php the_modified_date(); ?></span><br />
<?php $book = get_post_meta($post->ID, 'IR_imagen', true); 
$raiz = $_SERVER['DOCUMENT_ROOT'];
$newstring = str_replace("http://www.telmeds.org", $raiz , $book ); //recordar reemplazar el document root
$size = filesize($newstring);
$size2 = byteConvert($size);
?>
<?php
if (!empty($book)) {
echo '<span><small>Tamaño: ' . $size2 . '</small></span>';
}
?>
							</p>
						</div>
						<div class="clear"></div>
					</div>
<?php endwhile; else: endif; ?>
					<div class="clear"></div>
				</div>
<?php wp_pagenavi(); ?>
			</div>
		</div>
	</div><!-- termina cuerpo -->
<?php get_footer();?>
