<?php
class DAO
{
	public function __construct()
	{
	}
	public function connexion()
	{
		$pdo = new PDO('mysql:host=mysql-alpageweb.alwaysdata.net;dbname=alpageweb_iut', 'alpageweb', 'Z@X4w3SgSmgEhLQ');
		return $pdo;
	}
}