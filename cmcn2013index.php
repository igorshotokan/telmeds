<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die('Por favor no cargue esta p&aacute;gina directamente. &iexcl;Gracias!'); } ?>
<?php
/*
Template Name: CMCN2013
*/
?>
<?php get_header();?>
<?php get_telmeds_head();?>
	<div id="cuerpo">
		<div class="wrapper">
			<div id="singletext" class="contenedor">
				<ul id="singletxt">
					<li><a href="http://www.telmeds.org/">Inicio</a></li>
					<li class="ui-tabs-selected"><a href="http://www.telmeds.org/cmcn2013">Congreso Multidisciplinario Científico Nacional 2013</a></li>
				</ul>

<style type="text/css">
	div#indice{
		color: #3e3e3e; 
	}
	div#singletext h1.titulo{
		font-size: 36px;			
	}
	h2.titulo2{
		margin-left: 20px;
		text-align: center;
		font-size: 24px;
		text-decoration: underline;				
	}
	hr{
		width: 80%;
		border: #efefef 1px solid;
	}
	label{
		font-family: Verdana;
		font-size: 20px;
		padding: 4px;
		margin-left: 70px;
		margin-bottom: 3px;
	}
	label div{
		display: inline-block;
		width: 600px;
		height: 40px;
	}
	div#indice a:link, a:visited{
		text-decoration: none;
		font-weight: none;
		color: #176AAC;
		-o-transition:color .2s ease-out, background 2s ease-in;
		-ms-transition:color .2s ease-out, background 2s ease-in;
		-moz-transition:color .2s ease-out, background 2s ease-in;
		-webkit-transition:color .2s ease-out, background 2s ease-in;
		transition:color .2s ease-out, background 2s ease-in;
	}

	div#indice a:hover { color:black; }
</style>
				<div id="indice">
					<center><img id="logo" src="http://www.telmeds.org/wp-content/themes/telmedsv7/images/cmcn/CMCNsimple.png"></img></center><br>
					<h1 class="titulo">Índice</h1>

					<h2 class="titulo2">Enlaces</h2><br>
					<div name="enlaces">
						<label><div><a href="http://www.telmeds.org/cmcn2013inscripcion">Inscripción</a></div></label><br>
						<label><div><a href="http://www.telmeds.org/cmcn2013concursos">Concursos</a></div></label><br>
						<label><div><a href="http://www.telmeds.org/cmcn2013simposios">Simposios</a></div></label><br>
						<label><div><a href="http://www.telmeds.org/cmcn2013clinicafr">Clínica de Factores de Riesgo Cardiovascular</a></div></label><br>
						<label><div><a href="http://www.telmeds.org/cmcn2013comite">Comité Organizador</a></div></label><br>
					</div>

					<br><hr><br>

					<center><img src="http://www.telmeds.org/wp-content/themes/telmedsv7/images/cmcn/afiche-eje-tematico.png"></img></center><br>

					<br><hr><br>
				</div>

			</div><!-- termina contenedor -->
		</div><!-- termina wrapper -->
	</div><!-- termina cuerpo -->
<?php get_footer();?>