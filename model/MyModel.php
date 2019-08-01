<?php 
	class MyModel{

		private $conn = null;

		public function get_connection(){
			if (!is_null($this->conn)) {
            	return $this->conn;
        	}
	        $this->conn = false;
	        try {
	            $this->conn = new PDO('mysql:host=localhost;dbname=kampus', 'root', '');
	        } catch(PDOException $e) { 
	        	echo $e->getMessage();
	        }

	        return $this->conn;
		}

		public function getData(){

			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("SELECT * FROM tb_mahasiswa");
			$statement->execute();
			while ($row = $statement->fetch()) {
			    $hasil[] = $row;
			}

			return $hasil;

		}

		public function deleteData($nim){
			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("DELETE FROM tb_mahasiswa WHERE nim='$nim'");
			$do_delete = $statement->execute();
			return $do_delete;

		}

		public function getById($nim){

			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("SELECT * FROM tb_mahasiswa WHERE nim='$nim'");
			$statement->execute();
			while ($row = $statement->fetch()) {
			    $hasil[] = $row;
			}
			return $hasil;

		}
		public function insert_mhs($nim,$nama,$alamat,$jurusan){

			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("INSERT INTO tb_mahasiswa(nim,nama,alamat,jurusan) VALUES(?,?,?,?)");
			return $statement->execute(array($nim,$nama,$alamat,$jurusan));

		}

		public function update_mhs($nim,$nama,$alamat,$jurusan){

			$koneksi = $this->get_connection();
			$statement = $koneksi->prepare("UPDATE tb_mahasiswa 
				SET nama='$nama',alamat='$alamat',jurusan='$jurusan' WHERE nim='$nim'");
			return $statement->execute();

		}

	}
 ?>