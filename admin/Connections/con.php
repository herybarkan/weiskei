<?php
   /* class Koneksi{
        public function DBConnect(){
			$dbhost = 'localhost'; // set the hostname
			$dbname = 'dentist_apps_db'; // set the database name
			$dbuser = 'root'; // set the mysql username
            $dbpass = '';  // set the mysql password

			try {
				$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
				$dbConnection->exec("set names utf8");
                $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return  $dbConnection;
			}
			catch (PDOException $e) {
				return 'Connection failed: ' . $e->getMessage();
			}
		}
    }*/
	
$db_host="localhost"; //localhost server 
$db_user="root";	//database username
$db_password="";	//database password   
$db_name="wk_db";	//database name

try
{
	$db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
	$e->getMessage();
}
