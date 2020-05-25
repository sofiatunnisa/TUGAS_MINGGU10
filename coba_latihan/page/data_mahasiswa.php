<!DOCTYPE html>
<html>
<head>
	<title>APLIKASI KAMPUS</title>
</head>
<body>
	<table>
		<tr>
			<th>NO</th>
			<th>NIM</th>
			<th>NAMA</th>
			<th>ALAMAT</th>
			<th>NO HP</th>
		</tr>
		<?php
			include('../class.crud.php');
			$crud = new Crud;
			$mahasiswa = $crud->read_data('tb_mahasiswa');

			foreach ($mahasiswa as $mhs) 
			{?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo mhs['nim']; ?></td>
					<td><?php echo mhs['nama']; ?></td>
					<td><?php echo mhs['alamat']; ?></td>
					<td><?php echo mhs['no_hp']; ?></td>
				</tr>
			
			<?php} ?>
		?>
	</table>

</body>
</html>