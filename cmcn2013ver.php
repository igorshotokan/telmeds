<?php if ($_SERVER['HTTP_REFERER'] != "http://www.telmeds.org/wp-admin/profile.php"  || current_user_can('cmcn') === false) { 
header("Location: http://www.telmeds.org/404.php");
//die('Por favor no cargue esta p&aacute;gina directamente. &iexcl;Gracias!'); 
} ?>
<?php
/*
Template Name: CMCN2013admin
*/
?>
<?php get_header();?>
<?php get_telmeds_head();?>
	<div id="cuerpo">
		<div class="wrapper">
			<div id="singletext" class="contenedor">
				<ul id="singletxt">
					<li><a href="http://www.telmeds.org/">Inicio</a></li>
					<li><a href="http://www.telmeds.org/cmcn2013">Congreso Multidisciplinario Científico Nacional 2013</a></li>
					<li class="ui-tabs-selected"><a href="http://www.telmeds.org/cmcn2013admin">Inscripción - Administración</a></li>
				</ul>
				<br><br>
				<a id="descarga" href="http://www.telmeds.org/wp-content/themes/telmedsv7/scripts/cmcn/descarga.php"><img height="50" src="http://www.telmeds.org/wp-content/themes/telmedsv7/images/cmcn/xls.png">DESCARGAR EN EXCEL</a>

				<br><br>
				<b>Si le sale esta advertencia, aprete en YES / ACEPTAR / SI.</b>
				<img src="http://www.telmeds.org/wp-content/themes/telmedsv7/images/cmcn/seleccionar.png">
				<br>
			</div>
		</div>
<style type="text/css">
	a#descarga{
		margin: 10px;
		text-decoration: none;
		color: #CCC;
		font-size: 40px;
	}
	a#descarga:hover{
		margin: 10px;
		text-decoration: none;
		cursor: pointer;
		color: black;
	}
	a#descarga img{
		margin-right: 10px;
	}

	div#tablediv{
		overflow: scroll;
		width: 1040px;
	}

	table#CMCN{
		margin: 4px;
		border: 1px black solid;
	}

	table#CMCN th, table#CMCN td{
		padding: 4px;
		
	}
	tr.headers th{
		background: #AB1817;
		color: white;
	}
	tr.odd{
		background: #CCC;
	}
	tr.even{
		background: #e7e7e7;
	}
</style>
<center>
<div id="tablediv">
<?php
$USER = "telmeds2_cmcn";
$PASSWORD = "yMPZn^euKxy]";
$DATABASE = "telmeds2_cmcn";
$TABLE = "`2013`";

	//echo "<pre>"; print_r($_POST); echo "</pre>";
	$link = mysql_connect('localhost', $USER, $PASSWORD);
	mysql_set_charset('utf8',$link);
	$db_selected = mysql_select_db($DATABASE, $link);
	if (!$db_selected) { die ('Database access error : ' . mysql_error());}
	mysql_query("SET SESSION time_zone = '-5:00';");

$query = mysql_query("SELECT * FROM $TABLE");
//GENERATE TABLE AND HEADERS
$headers = false;
$row = "headers";
echo '<table id="CMCN">';
while($table = mysql_fetch_assoc($query)){
	//echo "<pre>"; print_r($table); echo "</pre>";
	if($row == "headers"){
		echo '<tr class="headers">';
		$row = "odd";
	}
	else if($row == "odd"){
		echo '<tr class="odd">';
		$row = "even";
	}
	else if($row == "even"){
		echo '<tr class="even">';
		$row = "odd";
	}
	foreach ($table as $key => $value) {
		if($headers == false){
			foreach ($table as $key => $value) {
				echo "<th>";
				echo $key;
				echo "</th>";
			}
			$headers = true;
			echo '</tr>';
			echo '<tr class="odd">';
			$value = 1; //Last value is date. So we need to reestablish.
			$row = "even";
		}

		echo "<td>";
		echo $value;
		echo "</td>";
	}
	echo '</tr>';
}
echo "</table>";
?>
</div>	
		
	</div><!-- termina cuerpo -->
<?php get_footer();?>
