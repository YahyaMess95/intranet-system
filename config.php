<?php
class config{
	public $cnx;
	function __construct(){
		$servername="localhost";
		$dbname="intranet";
		$username="root";
		$password="";
		$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
		$this->cnx=$conn;
	}
}

?>