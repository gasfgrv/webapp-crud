<?php

mysqli_report(MYSQLI_REPORT_STRICT);

function open_db() {
	try {
		$conn = new mysqli(DB_HOST, DB_USER, DB_PSSWRD, DB_NAME);
		return $conn;	
	} catch (Exception $e) {
		echo $e->getMessage;
		return null;
	}
}

function close_db($conn) {
	try {
		mysql_close($conn);
	} catch (Exception $e) {
		echo $e->getMessage();
	}
}