<?php
  define('DB_SERVER', 'localhost');
   
  define('DB_USERNAME', 'root');
 
  define('DB_PASSWORD', '');
 
  define('DB_DATABASE', 'covid');


	/*
	define('DB_SERVER', 'localhost');
   
	define('DB_USERNAME', 'root');
   
	define('DB_PASSWORD', '');
   
	define('DB_DATABASE', 'covid');
   

  define('DB_SERVER', 'localhost');
   
  define('DB_USERNAME', 'id14119152_root');
 
  define('DB_PASSWORD', 'Brijesh@007@Scs@');
 
  define('DB_DATABASE', 'id14119152_covid');
  */
	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

?>