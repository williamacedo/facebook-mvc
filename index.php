<?php
	require 'config.php';
    session_start();
	//Definindo constante para o caminho padrão do projeto


//Definindo o Autoload
	
	//spl_autoload_register — Registra a função dada como implementação de __autoload()
	spl_autoload_register(function($class){

		//strpos — Encontra a posição da primeira ocorrência de uma string
		if (strpos($class, 'Controller') > -1){

			//file_exists — Checa se um arquivo ou diretório existe
			if(file_exists('controllers/' .$class .'.php')){
		
				//A declaração require_once é idêntica a requirem exceto que o PHP verificará se o arquivo já foi incluído, e em caso afirmativo, não o incluirá (exigirá) novamente.
				require_once 'controllers/' .$class .'.php';
		
			}

		//file_exists — Checa se um arquivo ou diretório existe
		}else if(file_exists('models/' .$class .'.php')){
		
			//A declaração require_once é idêntica a requirem exceto que o PHP verificará se o arquivo já foi incluído, e em caso afirmativo, não o incluirá (exigirá) novamente.
			require_once 'models/' .$class .'.php';
		
		}else{
		
			//A declaração require_once é idêntica a requirem exceto que o PHP verificará se o arquivo já foi incluído, e em caso afirmativo, não o incluirá (exigirá) novamente.
			require_once 'core/' .$class .'.php';
		}
	});

$core = new core();
$core->run();



?>