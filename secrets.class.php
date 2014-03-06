<?php
 
/**
 * Loads secrets into the application. Setup secrets via $secrets[], get secrets via $_ENV['secrets'][]
 * 
 * As recommended by Polycademy http://polycademy.com/blog/id/148/modern_wordpress_workflow_with_composer
 */
class Secrets{
 
	public static function load(){
		
		$secrets_path = __DIR__ . '/secrets';
		$secrets_loaded = false;
 
		//see if "secrets folder" exists
		if(file_exists($secrets_path) AND is_dir($secrets_path)){
 
			foreach(new DirectoryIterator($secrets_path) as $file){
 
				//ignore dots and non-php extensions and this file itself
				if($file->isDot() OR $file->getExtension() != 'php') continue;
				
				$secrets_loaded = true;
 
				include_once($file->getPathname());
 
			}
 
		}
 
		if($secrets_loaded){
 
			foreach($secrets as $key => $value){
 
				$_ENV['secrets'][$key] = $value;
 
			}
 
			unset($secrets);
 
		}
 
	}
 
}