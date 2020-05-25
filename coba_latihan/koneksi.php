<?php

/**
 * 
 */
class Koneksi
{
	private $host = 'localhost';
	private $user = 'root';
	private $pass = '';
	private $db	  = 'db_campus';

	protected $conn;

	function __construct()
	{
		# code...
		if(!isset($this->conn))
		{
			$this->conn = new mysqli($this->host,$this->user,$this->pass,$this->db);
		}

		if (!$this->conn) 
		{
			# code...
			echo 'Koneksi Gagal';
		}

		//else 
		//{
			# code...
		//	echo 'Koneksi Berhasil';
		//}
		return $this->conn;
	}
}


$koneksi = new Koneksi();
?>