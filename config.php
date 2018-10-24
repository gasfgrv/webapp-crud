<?php

define('DB_NAME', 'clientes');
define('DB_USER', 'root');
define('DB_PSSWRD', '');
define('DB_HOST', '127.0.0.1');

if (!defined('ABSPATH'))
	define('ABSPATH', dirname(__FILE__).'/');

if(!defined('BASEURL'))
	define('BASEURL', '/webapp-crud/');

if(!defined('DBAPI'))
	define('DBAPI', ABSPATH."controller/db.php");

define('HEADER', ABSPATH.'view/header.php');
define('FOOTER', ABSPATH.'view/footer.php');