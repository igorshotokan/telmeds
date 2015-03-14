<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die('Por favor no cargue esta p&aacute;gina directamente. &iexcl;Gracias!'); } ?>
<?php
/*
Template Name: CMCN2013inscripcion
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
					<li class="ui-tabs-selected"><a href="http://www.telmeds.org/cmcn2013inscripcion">Inscripción</a></li>
				</ul>
<script type="text/javascript" src="http://www.telmeds.org/wp-content/themes/telmedsv7/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="http://www.telmeds.org/wp-content/themes/telmedsv7/js/jquery.form.js"></script>
<script type="text/javascript" src="http://www.telmeds.org/wp-content/themes/telmedsv7/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="http://www.telmeds.org/wp-content/themes/telmedsv7/js/jquery.form.js"></script>
	<style type="text/css">
		div#formulario{
			width: 940px;
		}
		form{
			color: #3e3e3e;
		}
		label{
			font-family: Verdana;
			font-size: 20px;
			padding: 4px;
			margin-left: 70px;
			margin-bottom: 3px;
		}
		div#email_error{
			margin-left: 75px;
			margin-bottom: 3px;
		}
		label#titulo{
			font-size: 26px;
			font-weight: bold;
			
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
		label div{
			display: inline-block;
			width: 300px;
		}

		div#formulario input, div#formulario textarea{
			padding: 4px 10px;
			background: #efefef;
			border: 1px solid #a3a3a3;
			width: 350px;
			font-size: 20px;
			font-family: Helvetica;
			margin-right: 10px;
		}
		div#formulario select{
			padding: 4px 10px;
			background: #efefef;
			border: 1px solid #a3a3a3;
			width: 372px;
			font-size: 20px;
			font-family: Helvetica;
			margin-right: 10px;
		}
		label.sector div{
			width: 70px;
			margin-bottom: 3px;
		}
		label.ayuda div{
			width: 50px;
			margin-bottom: 3px;
		}
		div#formulario input.nowidth{
			width: 30px;
		}
		hr{
			width: 80%;
			border: #efefef 1px solid;
		}
		.float-right{
			float: right;
		}
		label.req{
			font-size: 14px;
		}

		.button {
			display: inline-block;
			zoom: 1; /* zoom and *display = ie7 hack for display:inline-block */
			*display: inline;
			vertical-align: baseline;
			margin: 0 2px;
			outline: none;
			cursor: pointer;
			text-align: center;
			text-decoration: none;
			font: 14px/100% Arial, Helvetica, sans-serif;
			font-weight: bold;
			padding: 20px;
			text-shadow: 0 1px 1px rgba(0,0,0,.3);
			-webkit-border-radius: .5em; 
			-moz-border-radius: .5em;
			border-radius: .5em;
			-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
			-moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
			box-shadow: 0 1px 2px rgba(0,0,0,.2);
		}
		.red:hover {
			text-decoration: none;
			background: #AB3030;
		}
		.red:active {
			position: relative;
			background: #AC1817;
		}
		.red:disabled{
			background: #CCC;
		}
		.red {
			color: white;			
			border: solid 1px gray;
			background: #d81b21;
			background: -webkit-gradient(linear, left top, left bottom, from(#C25655), to(#AC1817));
			background: -moz-linear-gradient(top,  #C25655,  #AC1817);
			filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#C25655', endColorstr='#AC1817');
		}
		.blue {
			color: white;			
			border: solid 1px gray;
			background: #1782AC;
			background: -webkit-gradient(linear, left top, left bottom, from(#55C2C2), to(#1782AC));
			background: -moz-linear-gradient(top,  #55C2C2,  #1782AC);
			filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#55C2C2', endColorstr='#1782AC');
		}
		.blue:hover {
			text-decoration: none;
			background: #1782AC;
		}
		.blue:active {
			position: relative;
			background: #176AAC;
		}
		.blue:disabled{
			background: #CCC;
		}
		div#informacion{
			color: #3e3e3e;
		}
		div#informacion label div{
			vertical-align: top;
			display: inline-block;
			height: 50px;
		}
		
		.width230{
			width: 230px;
		}
		.width600{
			width: 600px;
		}
		.height600{
			height: 600px;
		}
		.hidden{
			display: none;
		}
		.bold{
			font-weight: bold;
		}
		.redinfo{
			color: #AC1817;
		}
		.greeninfo{
			color: #389812;
		}
		.marginleft{
			margin-left: 20px;
		}
		.nomargin{
			margin-left: 0px;
		}
		div#response{
			margin-left: 20px;
			font-size: 20px;
			font-weight: bold;
		}
		.clickable:hover{
			font-weight: bold;
			cursor: pointer;
		}
	</style>
<br>
<noscript>Este formulario utiliza JavaScript. Por favor utilice un explorador más actualizado.</noscript>
<div id="formulario">
<center><img id="logo" src="http://www.telmeds.org/wp-content/themes/telmedsv7/images/cmcn/CMCNsimple.png"></img></center><br>
	<form id="inscripcion" action="http://www.telmeds.org/wp-content/themes/telmedsv7/scripts/cmcn/inscripcion.php" method="post" autocomplete="off">
	<h1 class="titulo">FORMULARIO DE INSCRIPCIÓN</h1><br><br>
		<h2 class="titulo2">Participante</h2><br>
		<div name="participante">
			<label><div>Primer nombre*</div><input type="text" name="primer_nombre" required></label><br>
			<label><div>Segundo nombre</div><input type="text" name="segundo_nombre"></label><br>
			<label><div>Primer apellido*</div><input type="text" name="primer_apellido" required></label><br>
			<label><div>Segundo apellido</div><input type="text" name="segundo_apellido"></label><br>
			<label><div>Cédula</div><input type="text" name="cedula"></label><br>
		</div>

		<hr>

		<h2 class="titulo2">Procedencia</h2><br>
		<div name="procedencia">
			<label><div>Sector*</div></label>
			<label class="sector"><div>Público</div><input class="nowidth" type="radio" name="sector" value="publico" required></label>
			<label class="sector"><div>Privado</div><input class="nowidth" type="radio" name="sector" value="privado" required></label>
			<br>
			<label><div>Institución u Organización*</div><input type="text" name="institucion" required></label><br>
			<label><div>Profesión*</div><input type="text" name="profesion" required></label><br>
			<label><div>Cargo*</div><input type="text" name="cargo" required></label><br>
		</div>

		<hr>

		<h2 class="titulo2">Datos Personales</h2><br>
		<div name="datos_personales">
			<label><div>Correo Electrónico*</div><input type="text" id="email" name="email" required></label><br>
			<div id="email_error" class="hidden" style="color: red;">Por favor escriba un correo electrónico válido.</div><br>
			<label><div>Dirección*</div><input type="text" name="direccion" required></label><br>
			<label><div>Código Postal</div><input type="text" name="codigo_postal"></label><br>
			<label><div>Ciudad*</div><input type="text" name="ciudad" required></label><br>
			<label><div>País*</div><select name="pais" required>
				<option value="AG">Antigua and Barbuda</option>
				<option value="AI">Anguilla</option>        
				<option value="AN">Netherlands Antilles</option>        
				<option value="AQ">Antarctica</option>        
				<option value="AR">Argentina</option>        
				<option value="AS">American Samoa</option>        
				<option value="AU">Australia</option>        
				<option value="AW">Aruba</option>        
				<option value="BB">Barbados</option>        
				<option value="BD">Bangladesh</option>        
				<option value="BM">Bermuda</option>        
				<option value="BN">Brunei Darussalam</option>        
				<option value="BO">Bolivia</option>        
				<option value="BR">Brazil</option>        
				<option value="BS">Bahamas</option>        
				<option value="BT">Bhutan</option>        
				<option value="BV">Bouvet Island</option>        
				<option value="BZ">Belize</option>        
				<option value="CA">Canada</option>        
				<option value="CK">Cook Islands</option>        
				<option value="CL">Chile</option>        
				<option value="CN">China</option>        
				<option value="CO">Colombia</option>        
				<option value="CR">Costa Rica</option>        
				<option value="CU">Cuba</option>        
				<option value="DM">Dominica</option>        
				<option value="DO">Dominican Republic</option>        
				<option value="EC">Ecuador</option>        
				<option value="FJ">Fiji</option>        
				<option value="FK">Falkland Islands</option>        
				<option value="FM">Micronesia, Federated States of</option>        
				<option value="GD">Grenada</option>        
				<option value="GT">Guatemala</option>        
				<option value="GU">Guam</option>        
				<option value="GY">Guyana</option>        
				<option value="HK">Hong Kong</option>        
				<option value="HM">Heard Island and McDonald Islands</option>        
				<option value="HN">Honduras</option>        
				<option value="HT">Haiti</option>        
				<option value="ID">Indonesia</option>        
				<option value="IN">India</option>        
				<option value="IO">British Indian Ocean Territory</option>        
				<option value="JM">Jamaica</option>        
				<option value="JP">Japan</option>        
				<option value="KH">Cambodia</option>        
				<option value="KI">Kiribati</option>        
				<option value="KN">Saint Kitts and Nevis</option>        
				<option value="KP">Korea, North</option>        
				<option value="KR">Korea, South</option>        
				<option value="KY">Cayman Islands</option>        
				<option value="LA">Laos</option>        
				<option value="LC">Saint Lucia</option>        
				<option value="LK">Sri Lanka</option>        
				<option value="MH">Marshall Islands</option>        
				<option value="MM">Myanmar</option>        
				<option value="MN">Mongolia</option>        
				<option value="MO">Macao</option>        
				<option value="MP">Northern Mariana Islands</option>        
				<option value="MS">Montserrat</option>        
				<option value="MV">Maldives</option>        
				<option value="MX">Mexico</option>        
				<option value="MY">Malaysia</option>        
				<option value="NF">Norfolk Island</option>        
				<option value="NI">Nicaragua</option>        
				<option value="NP">Nepal</option>        
				<option value="NR">Nauru</option>        
				<option value="NU">Niue</option>        
				<option value="NZ">New Zealand</option>        
				<option value="PA" selected>Panama</option>        
				<option value="PE">Peru</option>        
				<option value="PG">Papua New Guinea</option>        
				<option value="PH">Philippines</option>        
				<option value="PR">Puerto Rico</option>        
				<option value="PW">Palau</option>        
				<option value="PY">Paraguay</option>        
				<option value="SB">Solomon Islands</option>        
				<option value="SG">Singapore</option>        
				<option value="SR">Suriname</option>        
				<option value="ST">Sao Tome and Principe</option>        
				<option value="SV">El Salvador</option>        
				<option value="TC">Turks and Caicos Islands</option>        
				<option value="TH">Thailand</option>        
				<option value="TK">Tokelau</option>        
				<option value="TO">Tonga</option>        
				<option value="TT">Trinidad and Tobago</option>        
				<option value="TV">Tuvalu</option>        
				<option value="TW">Taiwan</option>        
				<option value="UM">U.S. Minor Outlying Islands</option>        
				<option value="US">United States of America</option>        
				<option value="UY">Uruguay</option>        
				<option value="VE">Venezuela</option>        
				<option value="VG">Virgin Islands, British</option>        
				<option value="VI">Virgin Islands, U.S.</option>        
				<option value="VN">Vietnam</option>        
				<option value="VU">Vanuatu</option>        
				<option value="WS">Samoa</option>        
				<option value="XC">Tahiti</option>
			</select>
			</label><br>
			<label><div>Teléfono de Oficina</div><input type="text" name="telefono_oficina"></label><br>
			<label><div>Teléfono Móvil*</div><input type="text" name="telefono_movil" required></label><br>
			<label><div>Idioma Primario*</div><select name="idioma" required>
					<option value="Español" selected>Español</option>
					<option value="Inglés">Inglés</option>
					<option value="Portugués">Portugués</option>
					<option value="Francés">Francés</option>
					<option value="Otros">Otros</option>
				</select>
			</label>
			<label><div>Participará en algún concurso?*</div><select name="concursos" required>
					<option value="No" selected>No</option>
					<option value="Si">Sí</option>
				</select>
			</label>
		</div>

		<hr>
		
		<label class="float-right req">* requeridos</label><br>

		<button class="float-right button red" type="submit">COMPLETAR INSCRIPCIÓN</button>
	</form><br><br><br><br><br><br>
<button class="marginleft button blue" onClick='$("#informacion").show(500);' style="font-size: 20px;">MODO DE PAGO</button>
</div>
<div id="response"></div>

<br><br><br>
<div id="informacion" class="hidden">
	<h1 class="titulo">INFORMACIÓN GENERAL</h1><br><br>
	<label><div class="width230">Dirección</div><div class="width600">Hotel El Panamá Convention Center, Vía España 111, Calle Eusebio A. Morales, Panamá, República de Panamá</div></label><br>
	<label><div class="width230"></div><div class="width600 height600">+507 215-9280 ó +507 215-9999
			<br><br>
			<iframe width="600" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=V%C3%ADa+Espa%C3%B1a,+111+Ciudad+de+Panam%C3%A1+Apartado+1753+Panam%C3%A1+1+Panam%C3%A1&amp;aq=&amp;sll=8.985462,-79.531488&amp;sspn=0.027807,0.045447&amp;ie=UTF8&amp;hq=V%C3%ADa+Espa%C3%B1a,+111+Ciudad+de+Panam%C3%A1+Apartado+1753+Panam%C3%A1+1&amp;hnear=Panama&amp;t=m&amp;ll=8.990591,-79.540372&amp;spn=0.012716,0.025706&amp;z=15&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=V%C3%ADa+Espa%C3%B1a,+111+Ciudad+de+Panam%C3%A1+Apartado+1753+Panam%C3%A1+1+Panam%C3%A1&amp;aq=&amp;sll=8.985462,-79.531488&amp;sspn=0.027807,0.045447&amp;ie=UTF8&amp;hq=V%C3%ADa+Espa%C3%B1a,+111+Ciudad+de+Panam%C3%A1+Apartado+1753+Panam%C3%A1+1&amp;hnear=Panama&amp;t=m&amp;ll=8.990591,-79.540372&amp;spn=0.012716,0.025706&amp;z=15" style="color:#0000FF;text-align:left">View Larger Map</a></small>
			</div></label><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br>
	<h2 class="titulo2">Costos de Inscripción del Congreso</h2><br>
	<label>
		<div class="width600">
			Pre-Inscripción: B/. 150.00 (hasta el 31 de agosto)
			<br>
			Inscripción:     B/. 200.00
		</div>
	<br>
	</label><br>
	<label><div class="width230">Banco</div><div class="width600 redinfo">Banco General</div></label><br>
	<label><div class="width230">Tipo de Cuenta</div><div class="width600 redinfo">Cuenta Corriente</div></label><br>
	<label><div class="width230">A Nombre de</div><div class="width600 redinfo">ASOCIACION ODONTOLOGICA PANAMEÑA</div></label><br>
	<label><div class="width230">Número de Cuenta</div><div class="width600 redinfo">No. 03-01-01-003284-6</div></label><br>
	<label><div class="width230">DV</div><div class="width600 redinfo">DV-15</div></label><br>
	<label><div class="width230">RUC</div><div class="width600 redinfo">RUC. 239-114-9261</div></label><br>
	<label><div class="width230">Correo Electrónico</div><div class="width600 redinfo">aop@aopan.org</div></label><br>
	<label><div class="width230">Dirección de la AOP</div><div class="width600 redinfo">Edificio Advanced 099, Piso 12, Oficina C-D</div></label><br>
	<label><div class="width230">Teléfono</div><div class="width600 redinfo">269-1603 ó 263-2060</div></label><br>
	<br>
	<label class="bold nomargin">Para mayor información sobre la inscripción al evento favor comunicarse al teléfono <a class="redinfo">512-2479</a> o escribir al correo: <a class="redinfo">mabood@minsa.gob.pa</a></label><br>
<br><br><br>
</div>

<script>
// prepare the form when the DOM is ready 
$(document).ready(function() { 
    var options = { 
        target:        '#response',   // target element(s) to be updated with server response 
        beforeSubmit:  showRequest,  // pre-submit callback 
        success:       showResponse  // post-submit callback 
 
        // other available options: 
        //url:       url         // override for form's 'action' attribute 
        //type:      type        // 'get' or 'post', override for form's 'method' attribute 
        //dataType:  null        // 'xml', 'script', or 'json' (expected server response type) 
        //clearForm: true        // clear all form fields after successful submit 
        //resetForm: true        // reset the form after successful submit 
 
        // $.ajax options can be used here too, for example: 
        //timeout:   3000 
    }; 
 
    // bind to the form's submit event 
    $('#inscripcion').submit(function() { 
        // inside event callbacks 'this' is the DOM element so we first 
        // wrap it in a jQuery object and then invoke ajaxSubmit 
        $(this).ajaxSubmit(options); 
 
        // !!! Important !!! 
        // always return false to prevent standard browser submit and page navigation 
        return false; 
    }); 
}); 
 
// pre-submit callback 
function showRequest(formData, jqForm, options) { 
    // formData is an array; here we use $.param to convert it to a string to display it 
    // but the form plugin does this for you automatically when it submits the data 
    var queryString = $.param(formData); 
 
    // jqForm is a jQuery object encapsulating the form element.  To access the 
    // DOM element for the form do this: 
    // var formElement = jqForm[0]; 
 
    //alert('About to submit: \n\n' + queryString); 
 
    // here we could return false to prevent the form from being submitted; 
    // returning anything other than false will allow the form submit to continue
    var email = $("#email").val();
    if(validateEmail(email)){return true;}
    else {
	$('html, body').animate({scrollTop: $("#email").offset().top}, 1000);	
	$("#email_error").show(500);
	return false;
    }
} 
 
// post-submit callback 
function showResponse(responseText, statusText, xhr, $form)  { 
    // for normal html responses, the first argument to the success callback 
    // is the XMLHttpRequest object's responseText property 
 
    // if the ajaxSubmit method was passed an Options Object with the dataType 
    // property set to 'xml' then the first argument to the success callback 
    // is the XMLHttpRequest object's responseXML property 
 
    // if the ajaxSubmit method was passed an Options Object with the dataType 
    // property set to 'json' then the first argument to the success callback 
    // is the json data object returned by the server 
 
    //alert('status: ' + statusText + '\n\nresponseText: \n' + responseText + 
    //    '\n\nThe output div should have already been updated with the responseText.');
    if(statusText=="success"){
	$("#formulario").hide(500);
	$("#informacion").show(500);
	$('html, body').animate({scrollTop: $("#response").offset().top}, 1000);	
    }
} 

function validateEmail(email) 
{
    var re = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
    return (re.test(email) && !email.match(/^\.|\.{2,}|\.$/));
}
</script>

			</div>
		</div>
	</div><!-- termina cuerpo -->
<?php get_footer();?>