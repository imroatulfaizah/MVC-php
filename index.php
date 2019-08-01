<?php  

require_once '/controller/Mahasiswa.php';

$mahasiswa = new Mahasiswa();
if (isset($_GET['get'])) {
	$mahasiswa->get_update_data();
}else if (isset($_GET['update'])) {
	$mahasiswa->do_update();
}else if (isset($_GET['insert'])) {
	$mahasiswa->insert_data();
}else if (isset($_GET['save'])) {
	$mahasiswa->do_insert();
}else if (isset($_GET['delete'])) {
	$mahasiswa->delete_data();
}else{
	$mahasiswa->display_data();
}
?>