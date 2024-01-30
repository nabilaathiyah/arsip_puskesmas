<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
$kamar = $_POST['kamar'];

if($kamar == "imunisasi"){

	$login = mysqli_query($koneksi, "SELECT * FROM petugas WHERE petugas_username='$username' AND petugas_password='$password' AND kamar_id=1");
	$cek = mysqli_num_rows($login);

	if($cek > 0){
		session_start();
		$data = mysqli_fetch_assoc($login);
		$_SESSION['id'] = $data['petugas_id'];
		$_SESSION['nama'] = $data['petugas_nama'];
		$_SESSION['username'] = $data['petugas_username'];
		$_SESSION['status'] = "imunisasi_login";

		header("location:imunisasi/");
	}else{
		header("location:petugas_login.php?alert=gagal");
	}

}else if($kamar == "kesnak"){

	$login = mysqli_query($koneksi, "SELECT * FROM petugas WHERE petugas_username='$username' AND petugas_password='$password' AND kamar_id=2");
	$cek = mysqli_num_rows($login);

	if($cek > 0){
		session_start();
		$data = mysqli_fetch_assoc($login);
		$_SESSION['id'] = $data['petugas_id'];
		$_SESSION['nama'] = $data['petugas_nama'];
		$_SESSION['username'] = $data['petugas_username'];
		$_SESSION['status'] = "kesnak_login";

		header("location:kesnak/");
	}else{
		header("location:petugas_login.php?alert=gagal");
	}

} else if($kamar == "kiakb"){
	$login = mysqli_query($koneksi, "SELECT * FROM petugas WHERE petugas_username='$username' AND petugas_password='$password' AND kamar_id=3");
	$cek = mysqli_num_rows($login);

	if($cek > 0){
		session_start();
		$data = mysqli_fetch_assoc($login);
		$_SESSION['id'] = $data['petugas_id'];
		$_SESSION['nama'] = $data['petugas_nama'];
		$_SESSION['username'] = $data['petugas_username'];
		$_SESSION['status'] = "kiakb_login";

		header("location:kiakb/");
	}else{
		header("location:petugas_login.php?alert=gagal");
	}

} else if($kamar == "inm"){

	$login = mysqli_query($koneksi, "SELECT * FROM petugas WHERE petugas_username='$username' AND petugas_password='$password' AND kamar_id=4");
	$cek = mysqli_num_rows($login);

	if($cek > 0){
		session_start();
		$data = mysqli_fetch_assoc($login);
		$_SESSION['id'] = $data['petugas_id'];
		$_SESSION['nama'] = $data['petugas_nama'];
		$_SESSION['username'] = $data['petugas_username'];
		$_SESSION['status'] = "inm_login";

		header("location:inm/");
	}else{
		header("location:petugas_login.php?alert=gagal");
	}

} else if($kamar == "gizi"){

	$login = mysqli_query($koneksi, "SELECT * FROM petugas WHERE petugas_username='$username' AND petugas_password='$password' AND kamar_id=5");
	$cek = mysqli_num_rows($login);

	if($cek > 0){
		session_start();
		$data = mysqli_fetch_assoc($login);
		$_SESSION['id'] = $data['petugas_id'];
		$_SESSION['nama'] = $data['petugas_nama'];
		$_SESSION['username'] = $data['petugas_username'];
		$_SESSION['status'] = "gizi_login";

		header("location:gizi/");
	}else{
		header("location:petugas_login.php?alert=gagal");
	}

} else if($kamar == "farmasi"){

	$login = mysqli_query($koneksi, "SELECT * FROM petugas WHERE petugas_username='$username' AND petugas_password='$password' AND kamar_id=6");
	$cek = mysqli_num_rows($login);

	if($cek > 0){
		session_start();
		$data = mysqli_fetch_assoc($login);
		$_SESSION['id'] = $data['petugas_id'];
		$_SESSION['nama'] = $data['petugas_nama'];
		$_SESSION['username'] = $data['petugas_username'];
		$_SESSION['status'] = "farmasi_login";

		header("location:farmasi/");
	}else{
		header("location:petugas_login.php?alert=gagal");
	}

}else if($kamar == "rm"){

	$login = mysqli_query($koneksi, "SELECT * FROM petugas WHERE petugas_username='$username' AND petugas_password='$password' AND kamar_id=7");
	$cek = mysqli_num_rows($login);

	if($cek > 0){
		session_start();
		$data = mysqli_fetch_assoc($login);
		$_SESSION['id'] = $data['petugas_id'];
		$_SESSION['nama'] = $data['petugas_nama'];
		$_SESSION['username'] = $data['petugas_username'];
		$_SESSION['status'] = "rm_login";

		header("location:rm/");
	}else{
		header("location:petugas_login.php?alert=gagal");
	}

} else if($kamar == "gigi"){

	$login = mysqli_query($koneksi, "SELECT * FROM petugas WHERE petugas_username='$username' AND petugas_password='$password' AND kamar_id=8");
	$cek = mysqli_num_rows($login);

	if($cek > 0){
		session_start();
		$data = mysqli_fetch_assoc($login);
		$_SESSION['id'] = $data['petugas_id'];
		$_SESSION['nama'] = $data['petugas_nama'];
		$_SESSION['username'] = $data['petugas_username'];
		$_SESSION['status'] = "gigi_login";

		header("location:gigi/");
	}else{
		header("location:petugas_login.php?alert=gagal");
	}

} else if($kamar == "keuangan"){

	$login = mysqli_query($koneksi, "SELECT * FROM petugas WHERE petugas_username='$username' AND petugas_password='$password' AND kamar_id=9");
	$cek = mysqli_num_rows($login);

	if($cek > 0){
		session_start();
		$data = mysqli_fetch_assoc($login);
		$_SESSION['id'] = $data['petugas_id'];
		$_SESSION['nama'] = $data['petugas_nama'];
		$_SESSION['username'] = $data['petugas_username'];
		$_SESSION['status'] = "keuangan_login";

		header("location:keuangan/");
	}else{
		header("location:petugas_login.php?alert=gagal");
	}

} else if ($kamar == "promkes"){

	$login = mysqli_query($koneksi, "SELECT * FROM petugas WHERE petugas_username='$username' AND petugas_password='$password' AND kamar_id=10");
	$cek = mysqli_num_rows($login);

	if($cek > 0){
		session_start();
		$data = mysqli_fetch_assoc($login);
		$_SESSION['id'] = $data['petugas_id'];
		$_SESSION['nama'] = $data['petugas_nama'];
		$_SESSION['username'] = $data['petugas_username'];
		$_SESSION['status'] = "promkes_login";

		header("location:promkes/");
	}else{
		header("location:petugas_login.php?alert=gagal");
	}

}

