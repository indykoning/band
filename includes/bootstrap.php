<?php

// In this file initialisation takes place

// Settings for production and test environment
ini_set('date.timezone','Europe/Amsterdam');
switch (PROJECT_STATUS) {
	case 'production': {
		ini_set('display_errors','Off');
		ini_set('error_reporting', E_ERROR);
		error_reporting( 0 );
		// and more....
	}
	default :
		//test environment
	{
		ini_set('display_errors','1');
		ini_set('error_reporting', E_ALL);
	}
}


// Initialise template parser
$templateParser = new Smarty();
$templateParser->template_dir = "views";
$templateParser->addTemplateDir('admin_views');
$templateParser->compile_dir = "views/compiled"; //Place for compiled templates
//$templateParser->cache_dir = "views/cache";


?>