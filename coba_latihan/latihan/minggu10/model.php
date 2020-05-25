<?php 

	Class Model{

		private $server = "localhost";
		private $username = "root";
		private $password = '';
		private $db = "crud_oop_pdo";
		private $conn;

		public function __construct(){
			try {
				
				$this->conn = new mysqli($this->server,$this->username,$this->password,$this->db);
			} catch (Exception $e) {
				echo "connection failed" . $e->getMassage();
			}
		}

		public function insert(){

			if (isset($_POST['submit'])){
				if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['hp']) && isset($_POST['address'])) {
					if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['hp']) && !empty($_POST['address'])) {
						
						$name = $_POST['name'];
						$hp = $_POST['hp'];
						$email = $_POST['email'];
						$address = $_POST['address'];

						$query= "INSERT INTO records (name,email,hp,address) VALUES ('$name','$email','$hp','$address')";
						if ($sql = $this->conn->query($query)) {
							echo "<script>alert('records added successfully');</script>";
							echo "<script>window.location.href = 'index.php;</script>";
						}else{
							echo "<script>alert('failed');</script>";
							echo "<script>window.location.href = 'index.php;</script>";
						}


					}else{
						echo "<script>alert('empty');</script>";
						echo "<script>window.location.href = 'index.php;</script>";
					}
				}
			}
		}

		public function fetch(){
			$data = null;

			$query = "SELECT * FROM records";
			if ($sql = $this->conn->query($query)) {
				while ($rows = mysqli_fetch_assoc($sql)) {
					$data[] = $rows;
				}
			}
			return $data;
		}

		public function delete($id){

			$query = "DELETE FROM records where id = '$id'";
			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
		}

		public function fetch_single($id){


			$data = null;

			$query = "SELECT * FROM records WHERE id = '$id'";
			if ($sql = $this->conn->query($query)) {
				while ($row = $sql->fetch_assoc()) {
					$data = $row;
					
				}
			}
			return $data;
		}
		public function edit($id){

			$data = null;
			$query = "SELECT * FROM records WHERE id = '$id'";
			if ($sql = $this->conn->query($query)) {
				while ($row = $sql->fetch_assoc()) {
					$data = $row;
				}
			}
			return $data;
		}
		public function update($data){


			$query = "UPDATE records SET name='$data[name]', email='$data[email]', mobile='$data[hp]', address='$data[address]' WHERE id='$data[id]'";

			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
		}
	}

 ?>