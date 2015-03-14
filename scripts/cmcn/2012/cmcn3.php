<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die('Por favor no cargue esta p&aacute;gina directamente. &iexcl;Gracias!'); } ?>
<?php
/*
Template Name: CMCNTra
*/
?>
<?php get_header();?>
<?php get_telmeds_head();?>
	<div id="cuerpo">
<style type="text/css">
#tl-up {
background: url(http://www.telmeds.org/archivos/wister/cmcn/tl-up.jpeg) no-repeat;
width: 940px;
height: 960px;
}
#port-do {
background: url(http://www.telmeds.org/archivos/wister/cmcn/port-do.jpeg) no-repeat;
width: 940px;
height: 223px;
}
#criterios {
background: url(http://www.telmeds.org/archivos/wister/cmcn/tl-cri-up.jpeg) no-repeat;
width: 940px;
height: 118px;
}
#criterios:hover {
background: url(http://www.telmeds.org/archivos/wister/cmcn/tl-cri-do.jpeg) no-repeat;
width: 940px;
height: 118px;
cursor:pointer;
}
#lineamientos {
background: url(http://www.telmeds.org/archivos/wister/cmcn/tl-lin-up.jpeg) no-repeat;
width: 940px;
height: 105px;
}
#lineamientos:hover {
background: url(http://www.telmeds.org/archivos/wister/cmcn/tl-lin-do.jpeg) no-repeat;
width: 940px;
height: 105px;
cursor:pointer;
}
</style>

		<div class="wrapper">
			<div id="singletext" class="contenedor">
				<ul id="singletxt">
					<li><a href="http://www.telmeds.org/">Inicio</a></li>
					<li><a href="http://www.telmeds.org/cmcn">Congreso Multidisciplinario Científico Nacional</a></li>
					<li class="ui-tabs-selected"><a>Trabajos Libres</a></li>
				</ul>
				<div>
<br />
<h1>Congreso Multidisciplinario Científico Nacional</h1>
<br />
<div id="tl-up"></div>
<div id="criterios"  onclick = "window.location.href = 'http://www.telmeds.org/archivos/wister/cmcn/Criterios.pdf'"></div>
<div id="lineamientos"  onclick = "window.location.href = 'http://www.telmeds.org/archivos/wister/cmcn/Lineamientos.pdf'"></div>
<div id="port-do"></div>
				</div>
			</div>
		</div>
	</div><!-- termina cuerpo -->
<?php get_footer();?>