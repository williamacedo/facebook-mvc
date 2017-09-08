<?php
	
	class controller extends model {
		public function __construct(){
			parent::__construct();
		}
		//Método para Chamar uma View
		public function loadView($viewName, $viewData = array()) {

			//extract — Importa variáveis para a tabela de símbolos a partir de um array
			extract($viewData);

			//A declaração include inclui e avalia o arquivo informado.
			include 'views/' .$viewName .'.php';
		}


		public function loadTemplate($viewName, $viewData = array()) {

			//A declaração include inclui e avalia o arquivo informado.
			include 'views/template.php';

		}

		public function loadViewInTemplate($viewName, $viewData = array()){
			//extract — Importa variáveis para a tabela de símbolos a partir de um array
			extract($viewData);
			//A declaração include inclui e avalia o arquivo informado.
			include 'views/' .$viewName .'.php';
		}
	}

?>