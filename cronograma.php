<?php 
$TESTING = false;
$GENERATING = false;

if ( (__FILE__ == $_SERVER['SCRIPT_FILENAME'] || current_user_can('edit_posts') === false) && $TESTING === false ){ 
header("Location: http://www.telmeds.org/404.php");
die('Por favor no cargue esta p&aacute;gina directamente. &iexcl;Gracias!'); 
} 
?>
<?php
/*
Template Name: Cronograma
*/
?>
<?php 
header('Content-type: text/html; charset=utf-8');
?>
<?php if($TESTING === false){ 
	get_header();
	get_telmeds_head();
}
?>

<div id="cuerpo">
<div class="wrapper">
<?php 
      /*
      global $current_user;
      get_currentuserinfo();

      echo 'Username: ' . $current_user->user_login . "\n";
      echo 'User email: ' . $current_user->user_email . "\n";
      echo 'User first name: ' . $current_user->user_firstname . "\n";
      echo 'User last name: ' . $current_user->user_lastname . "\n";
      echo 'User display name: ' . $current_user->display_name . "\n";
      echo 'User ID: ' . $current_user->ID . "\n";

      //echo 'Editor: ' . current_user_can('editor') . "\n";
      $capabilities = get_object_vars(get_role( 'editor' ));
      $capabilities = $capabilities["capabilities"];
      echo "<pre>"; print_r($capabilities); echo "</pre>"; 
      echo "<br/><br/>";
      */
?>
<script type = "text/javascript" src="http://www.telmeds.org/wp-content/themes/telmedsv7/js/jquery-1.7.1.js"></script>

<style type="text/css">
#cronograma {
border-collapse:separate;
border: 1px solid black;
border-spacing:10px;

}
#cronograma tr td  {cursor:pointer; text-align:center; }
#cronograma tr td, th { background:#fff; padding:3px;}
#cronograma tr td.date:hover { background:#fff; cursor:auto;}
#cronograma tr td:hover { background:grey; }
#cronograma tr td.greensquare { background:#005511; color:white; }
#cronograma tr td.greensquare:hover { background:#007722; color:white; }
#cronograma tr td.yellowsquare { background:#d2aa1e; color:white; }
#cronograma tr td.yellowsquare:hover { background:#e1b622; color:white; }
#cronograma tr td.redsquare { background:#550011; color:white; }
#cronograma tr td.redsquare:hover { background:#770022; color:white; }

#log { display: none; color:green; border-style:solid; border-width:1px; text-align:center;}
  </style>

<?php 
if($TESTING === false){
	if(current_user_can('crono') === true){
		Input(false);
	}
	else {
		Load();
	}
}
else {
	Input(true);
}
?>


<?php
//Rules: 2 publicaciones por mes

$secciones = array("Prosalud", "Imagen médica", "Documentos", "Imagen reto", "Casos clínicos", "Cápsulas", "Artículos", "Quices", "Perlas", "Noticias");
//$integrantes = array("Oris", "Itsamad", "Luis", "René", "DavidC", "Wister", "DavidH", "Yashica", "Héctor", "Julissa", "Eliany", "Iván", "José", "Juan", "Justo", "Zabdy", "Víctor", "Tomás", "Ken", "Óscar", "Amy", "Magdalena", "Kenny","Tatiana", "Elsa", "Elisa", "Emelda", "José María", "Kevin", "Ruby", "Carlos");
	//echo $integrantes[array_rand($integrantes)];

/*
Justo E. Pinzón E.
Yashica González
Juan Osorio J.
Amy Serrano
Óscar Pérez
Iván Mendieta
Eliany Luzcando
Luis Borges
Magdalena Lay
Julissa Loo
David Hernández
Oris Apolayo
José Loo
Wister Fung Fung
Mario Espinosa
José Morales
Héctor Lezcano
David Crespo
Tomás Rodríguez
René Campos
Sonny Chen
Zabdy Pittí
Ana Valeria Castillo
Yurian Díaz
*/

$integrantes=explode("\n", $_POST["integrantes"]);
$sec_2w = array("Prosalud", "Casos clínicos", "Artículos");
$sec_2w_last;
$duty_array = array();

	foreach($secciones as $secc){
		$duty_array[$secc][0] = array();
	}

$fromDate;
$toDate;
$years;
$duty_total;
$idG;

if(!empty($_POST["from_date"])){
	$fromDate = $_POST["from_date"];
}
if(!empty($_POST["to_date"])){
	$toDate = $_POST["to_date"];
}

if(!empty($fromDate) && !empty($toDate)){
	Main($fromDate, $toDate);
}
else if(!empty($_POST["id"])){
	Load($_POST["id"]);
	//Load();
}

else {
//echo "A date is missing.";
}
?>




<?php
function Input($TESTING){
?>
<form action="<?php if($TESTING === true){ echo basename($_SERVER['PHP_SELF']);} else{ echo 'http://www.telmeds.org/cronograma/'; } ?>" method="post">

		Usage: Input date as month/day/year E.g. 08/01/2014<br />
		**Bold means repetition due to lack of members or bad luck on the yearly sectorial publication<br />
		Debido a la falta de ganas de debug, este generador tiene problemas cuando el período es mayor que 1 año.<br /><br />
		Members: List is exploded by \n<br />
		<textarea name="integrantes" cols="100"></textarea>
		<br />
		From:
		<input type="text" name="from_date" value=""/>
		<br />
		To:
		<input type="text" name="to_date" value=""/>
		<br />
		<input type="submit" value="Generate" /> <input type="submit" name="id" value="Load" />
		</form>

<?php
}

function Load($id){
	$con = mysql_connect("localhost", WISTER_USER, WISTER_PASSWORD);
	if (!$con) { die('Could not connect: ' . mysql_error()); }
	mysql_select_db(WISTER_DATABASE, $con);
	if($id == "Load" || $id === FALSE || empty($id)){ 
		$query = mysql_query("SELECT id FROM crono ORDER BY id DESC LIMIT 1");
		$query = mysql_fetch_row($query);
		$id = $query[0];
	}	
	
	$query = mysql_query("SELECT content FROM crono WHERE id='$id'");
	$query = mysql_fetch_row($query);

	mysql_close($con);

	echo '<div id="log"></div><br/>'."\n";
	echo '<table id="cronograma">'."\n";
	echo reverse_escape($query[0]);
	echo "</table>";
	
	global $idG;
	$idG = $id;
}

function Main($fromDate, $toDate){
	global $TESTING;	
	$GENERATING = TRUE;
	if($TESTING === false){
		$con = mysql_connect("localhost", WISTER_USER, WISTER_PASSWORD);
		if (!$con) { die('Could not connect: ' . mysql_error()); }
		mysql_select_db(WISTER_DATABASE, $con);
	
		$query = mysql_query("INSERT INTO crono (content) VALUES ('')");
		$query = mysql_query("SELECT id FROM crono ORDER BY id DESC LIMIT 1");
		$query = mysql_fetch_row($query);
		$id = $query[0];
		global $idG;
		$idG = $id;

		mysql_close($con);
	}

	global $secciones, $integrantes, $duty_array, $years, $duty_total;
	$fromDateTS = strtotime($fromDate);	//Converting all dates for Date Object works.
	$toDateTS = strtotime($toDate);
	//echo $fromDateTS;
	$fromDateSun = new DateTime($fromDate);
	$toDateSun = new DateTime($toDate);
	$lastDate = "";

	$years = ceil(($toDateTS - $fromDateTS)/(365*24*60*60)); //Rounds how many years there is between both dates.
	//echo $years;	//Lets us see the result

	//echo date("D",$fromDateTS);
	while(date("D",$fromDateTS) != "Sun"){ //Finds the first Sunday of the month.
		$fromDateTS += 24*60*60;
		//echo date("D d  ",$fromDateTS);		
	}

	//$days = $fromDateSun->diff($toDateSun, true)->days;	//Calculate how many sundays there is between both dates.
	$days = ceil(abs($fromDateTS - $toDateTS) / 86400);
	//echo $days;
	$sundays = intval($days / 7) + ($fromDateSun->format('N') + $days % 7 >= 7);
	//echo $sundays;
	$duty_total = (3 * ceil($sundays/2)) + (7 * $sundays);
	//echo $duty_total;
	
	echo '<div id="log"></div><br/>';
	echo '<table id="cronograma">'."\n<th>Date</th>"."\n";


	for($sec_i = 0; $sec_i < sizeof($secciones); $sec_i++){		//Starting the constructions of headers for the table
			echo "<th>".$secciones[$sec_i]."</th>\n";	//Creating headers for each section
			}

	for($currentDateTS = $fromDateTS; $currentDateTS <= $toDateTS; $currentDateTS += (24*60*60)){
		if(date("D",$currentDateTS) == "Sun" && $lastDate != date("D d", $currentDateTS)){ //Something weird going on here.
			$current_month = date("F", $currentDateTS);
			//echo date("D d M", $currentDateTS);
			//echo "<br />";
			echo "<tr>\n";
			if(empty($last_month) || $last_month != $current_month){
				echo '<td class="date"><strong>'.date("F", $currentDateTS)."</strong></td>";
				for($sec_i = 0; $sec_i < sizeof($secciones); $sec_i++){
					echo '<td class="date">'."</td>\n";
				}
				echo "</tr>\n";
				$currentDateTS -= (24*60*60);
				$last_month = $current_month;
			}			
			
			else {
			//echo '<td class="date">'.date("D d", $currentDateTS)."lm=$last_month, cm=$current_month, cD=$currentDateTS</td>\n";  //Weird stuff can be seen here.
			echo '<td class="date">'.date("D d", $currentDateTS)."</td>\n";
			$lastDate = date("D d", $currentDateTS);
			for($sec_i = 0; $sec_i < sizeof($secciones); $sec_i++){
				
				if(isAbleSeccion($secciones[$sec_i], $currentDateTS)){
				echo "<td>";
					$listintegrantes = array();
					$listintegrantes = $integrantes;
					//echo "<pre>"; print_r($listintegrantes); echo "</pre>";
					$currentIntegrante = $integrantes[array_rand($integrantes)];
					$badluck = false;
					while(isAble($secciones[$sec_i], $currentDateTS, $currentIntegrante, $badluck, $duty_total) === false){
						//ob_start();
						set_time_limit(20);
						unset($listintegrantes[array_search($currentIntegrante, $listintegrantes)]);
						if(empty($listintegrantes)){
							$listintegrantes = $integrantes;
							$badluck = true;
							//exit();
							
						}
						//ob_flush(); flush();
						//echo "<pre>"; print_r($listintegrantes); echo "</pre>";
						//$index = array_rand($listintegrantes);
						//echo "index:" . $index . "</br>";
						$currentIntegrante = $listintegrantes[array_rand($listintegrantes)];
						//if($badluck === true){$currentIntegrante = $currentIntegrante;}
					}
					$level = sizeof($duty_array[$secciones[$sec_i]]);
					//echo $level;
					if(sizeof($duty_array[$secciones[$sec_i]][$level-1]) == sizeof($integrantes)){
						$duty_array[$secciones[$sec_i]][$level][$currentDateTS] = $currentIntegrante;
					}
					else {
						$duty_array[$secciones[$sec_i]][$level-1][$currentDateTS] = $currentIntegrante;
					}
					if($badluck === true){echo "<strong>$currentIntegrante</strong>";}					
					else { echo $currentIntegrante; }
					unset($listintegrantes);
				echo"</td>\n";
				}
				else {
					echo '<td class="date">'."</td>\n";
				}
			}
			echo "</tr>\n";
			}
		}

	}

	echo "</table>";
	//echo "<pre>";print_r($duty_array);echo "</pre>";
}

function isAble($seccion, $currentDateTS, $currentIntegrante, $badluck, $duty_total){
	if(isAbleMonth($currentDateTS, $currentIntegrante, $badluck) && isAbleYear($seccion, $currentDateTS, $currentIntegrante, $badluck) && isAbleDay($currentDateTS, $currentIntegrante) && isAblePeriod($currentDateTS, $currentIntegrante) && isAblePromedio($currentIntegrante, $duty_total, $badluck) ){
		return TRUE;

	}
	else {
		return FALSE;
	}
}

function isAblePeriod($currentDateTS, $currentIntegrante){ //Golden rule. Tener minimo 14 días entre cada publicacion
	global $duty_array;
	$period;
	foreach($duty_array as $key => $value){
		foreach($duty_array[$key] as $levelkey => $levelvalue){
			foreach($duty_array[$key][$levelkey] as $date => $person){
				if($person == $currentIntegrante){
					if(empty($period)){ $period = $date;}
					else if($date > $period){ $period = $date;}
				}

			}

		}
	}
	if(empty($period)){ return TRUE;}
	else if(($currentDateTS-$period) >= 14*24*60*60){ return TRUE;}
	else { return FALSE;}

}

function isAbleDay($currentDateTS, $currentIntegrante){ //Golden Rule: No tener mas de una publicacion por dia.
	global $duty_array;
	$maxpub = 1;
	$daycount = 1;
	foreach($duty_array as $key => $value){
		foreach($duty_array[$key] as $levelkey => $levelvalue){
			foreach($duty_array[$key][$levelkey] as $date => $person){
				if($person == $currentIntegrante && $date == $currentDateTS){
					//echo $date;
					$daycount++;
				}

			}

		}
	}

	if($daycount <= $maxpub){
		return TRUE;
	}
	else {
		return FALSE;
	}

}

function isAbleYear($seccion, $currentDateTS, $currentIntegrante, $badluck){
	return TRUE; //RETURNING TRUE ALWAYS. THIS FUNCTION IS DISABLED.
	global $duty_array, $years;
	$maxpub = 1;
	$sectioncount = 1;
	if($badluck === true){ $maxpub = $years * 3;} //Parameter for section its 3??? Cant be. ---Correction---
	foreach($duty_array as $key => $value){
		foreach($duty_array[$key] as $levelkey => $levelvalue){
			foreach($duty_array[$key][$levelkey] as $date => $person){
				if($person == $currentIntegrante && $key == $seccion){
					//echo $date;
					$sectioncount++;
				}

			}

		}
	}

	if($sectioncount <= $maxpub){
		return TRUE;
	}
	else {
		return FALSE;
	}

}

function isAbleMonth($currentDateTS, $currentIntegrante, $badluck){
	global $duty_array;
	$month = date("F", $currentDateTS); //Get current month name
	$monthcount = 1;
	$maxpub = 2;
	if($badluck === true){ $maxpub = 3; } //The parameter for bad luck in isAbleMonth is 3 publications in that month. Normally, its 2, with 2 weeks in between.
	foreach($duty_array as $key => $value){
		foreach($duty_array[$key] as $levelkey => $levelvalue){
			foreach($duty_array[$key][$levelkey] as $date => $person){
				if($person == $currentIntegrante && date("F", $date) == $month){ //As long as is the person we are looking for and its the same month
					//echo $date;
					$monthcount++;
				}

			}

		}
	}
	//echo "iM";
	//echo $monthcount;
	if($monthcount <= $maxpub){
		return TRUE;
	}
	else {
		return FALSE;
	}
}


function isAbleSeccion($seccion, $currentDateTS){ //Nothing to be changed. Just spaces the different sections
	global $sec_2w, $sec_2w_last;
	foreach($sec_2w as $sec){
		if($seccion == $sec && ($currentDateTS-$sec_2w_last) >= (14*24*60*60) || $currentDateTS == $sec_2w_last){
			$sec_2w_last = $currentDateTS;
			return TRUE;
		}
		else if($seccion == $sec && ($currentDateTS-$sec_2w_last) < (14*24*60*60)){
			return FALSE;
		}
	}
	return TRUE;
}

function isAblePromedio($currentIntegrante, $duty_total, $badluck){
	if($badluck === TRUE){ return TRUE; }	
	global $integrantes, $duty_array;
	$integrantes_total = sizeof($integrantes);
	$duty_max = ceil($duty_total/$integrantes_total);
	$duty_ammount = count_r($currentIntegrante, $duty_array);
	if($duty_ammount < $duty_max){
		return TRUE;
	}
	else{
		return FALSE;
	}

}

function count_r($needle, $array){
	$i = 0;
    foreach($array as $k => $value){
		/*substr($value, 0, -1);
		echo "value: " . $value . is_string($value);
		echo "needle: ". $needle . is_string($needle);
		echo "<br>";*/
	if(!is_array($value) && preg_match("/$needle/i", $value)){
		$i++;
	}
        else if(is_array($value)){ 
		$i += count_r($needle, $value); 
	}
    }
    return $i;
}

function reverse_escape($str)
{
	$search=array("\\\\","\\0","\\n","\\r","\Z","\'",'\"');
	$replace=array("\\","\0","\n","\r","\x1a","'",'"');
	return str_replace($search,$replace,$str);
}

function AjaxSave($id){
?>
	<script>
	var savetime;
	ajaxsave();

	$("#cronograma tr td:not(.date)").toggle(
	    function () {
	      $(this).addClass("greensquare");
		clearTimeout(savetime);
		savetime = setTimeout("ajaxsave()", 3000);
	    },
	    function () {
	      $(this).addClass("yellowsquare").removeClass("greensquare");
		clearTimeout(savetime);
		savetime = setTimeout("ajaxsave()", 3000);
	    },
	    function () {
	      $(this).addClass("redsquare").removeClass("yellowsquare");
		clearTimeout(savetime);
		savetime = setTimeout("ajaxsave()", 3000);
	    },
	    function () {
	      $(this).removeClass("redsquare");
		clearTimeout(savetime);
		savetime = setTimeout("ajaxsave()", 3000);
	    }
	    
	  );

	function ajaxsave(){
	var id = <?php global $idG; echo $idG; ?>;
	var content = $('#cronograma').html();
	//var content = $.base64.encode($('#cronograma'))
	//var content = "lola";
	var datastring = "id="+id+"&content="+content;
	//alert(datastring);
	var request = $.ajax({
	  url: "http://www.telmeds.org/wp-content/themes/telmedsv7/scripts/ajax.php",
	  type: "POST",
	  data: datastring,
	  dataType: "html"
	});

	request.done(function(msg) {
	  $("#log").html(msg).fadeIn(1500).fadeOut(1500);
	  //$("#log").fadeIn("slow");

	});

	request.fail(function(jqXHR, textStatus) {
	  //alert( "Request failed: " + textStatus );
	$("#log").html(textStatus).fadeIn(1500).fadeOut(2000);
	});

	}
	</script>
<?php
} //Function AjaxSave ends.
?>

<?php 
if($TESTING === false){
	if(current_user_can('crono') === true){
		AjaxSave($id);
	}
}
?>

</div>
<br/>
</div>

<?php 
if($TESTING === false){
	get_footer();
}
else{
	//echo "<pre>"; print_r($duty_array); echo "</pre><br>";
	//echo count($duty_array["Noticias"][0], COUNT_RECURSIVE);
	//echo count_r("Wister Fung Fung", $duty_array);
	echo "duty_total: $duty_total<br>";
	echo "duty_max: " . ceil($duty_total/sizeof($integrantes)) . "<br>";
	foreach($integrantes as $nombre){
		$conteo = count_r($nombre, $duty_array);
		echo "$nombre: $conteo<br>";
		if($conteo == 1 OR $conteo == 0){
			//$duty_array = array();
			//exit;
			//Main($fromDate, $toDate);
		}
	}
}
?>