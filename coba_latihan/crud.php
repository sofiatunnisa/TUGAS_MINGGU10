<?php
include('class.koneksi.php')

/**
 * 
 */
class Crud extends Koneksi
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	public function read_data($table)
	{
		$query = "SELECT = FROM $table";
		
		$hasil = $this->conn->query($query);
		if ($hasil) 
		{
			# code...
			return "Terjadi Kesalahan Dalam Query"
		}
		
		$rows = array();
		while ($row = $hasil->cubrid_fetch_assoc()) 
		{
			# code...
			$rows[] = $row;
		}
		return $row;
	}

	public function simpan(){}
	public function update(){}
	public function delete(){}
}

?>