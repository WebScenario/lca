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
					$this->errores.= "<br /> Ingrese su email por favor.";
				}else if( !preg_match($this->sintax,$this->email)){
					$this->errores.= "<br /> Ingrese formato correcto de email  <br /> 'ej: nombre@dominio.com' .";
					}
				
				if( $this->asunto == "" ){
					$this->errores.= "<br /> Ingrese su asunto por favor.";
				}else if( strlen($this->asunto) > 20 ){
					$errores.= "<br /> Escriba un asunto con menos caracteres.";
					}
							 
					if( $this->msj == "" ){
					$this->errores.= "<br /> Ingrese su mensaje por favor.";
				}else if( strlen($this->msj) > 200 ){
					$this->errores.= "<br /> Maximo permitido 200 caracteres.";
					}
			}
	
		public function response(){
			if( !empty($this->errores)){
				echo  $this->errores;
			}else{
					//mail($destinatario, $asunto, $msj);
					echo "<br />Mensaje enviado con exito";
					 echo "<script type='text/javascript'>  parent.document.formu.reset(); </script>";  
			}
		}
	
	}
	
	$resp_peticion = new formulario();
	$resp_peticion->validaDatos();
	$resp_peticion->response();
	
?>