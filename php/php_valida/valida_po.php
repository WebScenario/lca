<?php
	class formulario{
		
		private $email;
		private $asunto;
		private $msj;
		
		private $destinatario;
		
		private $errores;
		
		private $sintax ;
			public function __construct(){
				$this->email = addslashes(htmlspecialchars($_POST["email"]));
				$this->asunto = addslashes(htmlspecialchars($_POST["asunto"])); 
				$this->msj = addslashes(htmlspecialchars($_POST["msj"]));
				
				$this->destinatario ="contacto@loscuatroa.com.ar";
				
				$this->errores = "";
				
				$this->sintax = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i";
			}
		
			public function validaDatos(){
				if( $this->email == "" ){
					$this->errores.= "<strong>* Ingrese su email por favor.</strong><br />";
				}else if( !preg_match($this->sintax,$this->email)){
					$this->errores.= "<strong>* Ingrese formato correcto de email</strong><br /> 'ej: nombre@dominio.com' .<br />";
					}
				
				if( $this->asunto == "" ){
					$this->errores.= "<strong>* Ingrese su asunto por favor. </strong><br />";
				}else if( strlen($this->asunto) > 20 ){
					$errores.= "<strong>* Escriba un asunto con menos caracteres. </strong><br />";
					}
							 
					if( $this->msj == "" ){
					$this->errores.= "<strong>* Ingrese su mensaje por favor. </strong><br />";
				}else if( strlen($this->msj) > 200 ){
					$this->errores.= "<strong>* Maximo permitido 200 caracteres. </strong><br />";
					}
			}
	
		public function response(){
			if( !empty($this->errores)){
				echo '<u>Lista de errores:</u> <br />';
				echo  $this->errores;
			}else{
					//mail($destinatario, $asunto, $msj);
					echo "Mensaje enviado con exito";
					 echo "<script type='text/javascript'>  parent.document.formu.reset(); </script>";  
			}
		}
	
	}
	
	$resp_peticion = new formulario();
	$resp_peticion->validaDatos();
	$resp_peticion->response();
	
?>