<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die('Por favor no cargue esta p&aacute;gina directamente. &iexcl;Gracias!'); } ?>
<?php
/*
Template Name: CMCN
*/
?>
<?php get_header();?>
<?php get_telmeds_head();?>
	<div id="cuerpo">
<style type="text/css">
#port-up {
background: url(http://www.telmeds.org/archivos/wister/cmcn/port-up.jpeg) no-repeat;
width: 940px;
height: 900px;
}
#port-do {
background: url(http://www.telmeds.org/archivos/wister/cmcn/port-do.jpeg) no-repeat;
width: 940px;
height: 223px;
}
#simposios {
background: url(http://www.telmeds.org/archivos/wister/cmcn/port-sim-up.jpeg) no-repeat;
width: 940px;
height: 114px;
}
#simposios:hover {
background: url(http://www.telmeds.org/archivos/wister/cmcn/port-sim-do.jpeg) no-repeat;
width: 940px;
height: 114px;
cursor:pointer;
}
#temas {
background: url(http://www.telmeds.org/archivos/wister/cmcn/port-tm-up.jpeg) no-repeat;
width: 940px;
height: 104px;
}
#temas:hover {
background: url(http://www.telmeds.org/archivos/wister/cmcn/port-tm-do.jpeg) no-repeat;
width: 940px;
height: 104px;
cursor:pointer;
}
#trabajos {
background: url(http://www.telmeds.org/archivos/wister/cmcn/port-tl-up.jpeg) no-repeat;
width: 940px;
height: 104px;
}
#trabajos:hover {
background: url(http://www.telmeds.org/archivos/wister/cmcn/port-tl-do.jpeg) no-repeat;
width: 940px;
height: 104px;
cursor:pointer;
}
#comite {
background: url(http://www.telmeds.org/archivos/wister/cmcn/port-co-up.jpeg) no-repeat;
width: 940px;
height: 104px;
}
#comite:hover {
background: url(http://www.telmeds.org/archivos/wister/cmcn/port-co-do.jpeg) no-repeat;
width: 940px;
height: 104px;
cursor:pointer;
}
#patrocinadores {
background: url(http://www.telmeds.org/archivos/wister/cmcn/port-pa-up.jpeg) no-repeat;
width: 940px;
height: 108px;
}
#patrocinadores:hover {
background: url(http://www.telmeds.org/archivos/wister/cmcn/port-pa-do.jpeg) no-repeat;
width: 940px;
height: 108px;
cursor:pointer;
}
</style>
		<div class="wrapper">
			<div id="singletext" class="contenedor">
				<ul id="singletxt">
					<li><a href="http://www.telmeds.org/">Inicio</a></li>
					<li class="ui-tabs-selected"><a>Congreso Multidisciplinario Científico Nacional</a></li>
				</ul>
				<div>
<br />
<h1>Congreso Multidisciplinario Científico Nacional</h1>
<br />
<div id="port-up"></div>
<div id="simposios" onclick = "window.location.href = 'http://www.telmeds.org/cmcn-simposios'"></div>
<div id="temas" onclick = "window.location.href = 'http://www.telmeds.org/cmcn-temas'"></div>
<div id="trabajos" onclick = "window.location.href = 'http://www.telmeds.org/cmcn-trabajos'"></div>
<div id="comite" onclick = "window.location.href = 'http://www.telmeds.org/cmcn-comite'"></div>
<div id="patrocinadores" onclick = "window.location.href = 'http://www.telmeds.org/cmcn-patrocinadores'"></div>
<div id="port-do"></div>
				</div>
			</div>
		</div>
	</div><!-- termina cuerpo -->
<?php get_footer();?>