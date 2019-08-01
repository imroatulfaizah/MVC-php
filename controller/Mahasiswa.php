<?php
	require_once '/model/MyModel.php';
	class Mahasiswa{

		public $model;

		function __construct(){
			$this->model = new MyModel();
		}

		public function redirect($location){
			header('location:'.$location);
		}

		public function display_data(){

			$data = $this->model->getData();
			include '/view/view_data.php';

		}

		public function insert_data(){
			include '/view/form_insert.php';
		}

		public function do_insert(){

			if (isset($_POST['simpan'])) {
				$nim	= $_POST['nim'];
				$nama	= $_POST['nama'];
				$alamat	= $_POST['alamat'];
				$jurusan = $_POST['jurusan'];

				$save = $this->model->insert_mhs($nim,$nama,$alamat,$jurusan);
				if ($save == true) {
					echo "<script>alert('Data berhasil ditambahkan');location='index.php'</script>";
				}else{
					echo "<script>alert('Data gagal ditambah');location='index.php'</script>";
				}
			}

		}

		public function delete_data(){

			$nim = $_GET['nim'];
			$this->model->deleteData($nim);
			$this->redirect('index.php');

		}

		public function get_update_data(){
			$nim = $_GET['nim'];
			$data = $this->model->getById($nim);
			include 'view/form_update.php';
		}

		public function do_update(){

			if (isset($_POST['submit'])) {
				$nim 	  = $_POST['nim'];
				$nama 	  = $_POST['nama'];
				$alamat 	  = $_POST['alamat'];
				$jurusan = $_POST['jurusan'];

				$update = $this->model->update_mhs($nim,$nama,$alamat,$jurusan);
				if ($update == true) {
					echo "<script>alert('Data berhasil diupdate');location='index.php'</script>";
				}else{
					echo "<script>alert('Data gagal diupdate);location='index.php'</script>";
				}
			}
	
		}

	}

 ?>