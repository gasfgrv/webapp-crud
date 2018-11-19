<?php
define('DB_NAME', 'clientes');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
if ( !defined('BASEURL') )
	define('BASEURL', '/webapp CRUD/');
	
if ( !defined('DBAPI') )
	define('DBAPI', ABSPATH . 'inc/database.php');

define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');