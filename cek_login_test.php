<?php
// Termasuk file koneksi database
include 'koneksi.php';

// Mengambil nama pengguna dan kata sandi dari permintaan POST
$user = $_POST['username'];
$pass = $_POST['password'];

// Menjalankan kueri SQL untuk mengambil data pengguna berdasarkan nama pengguna dan kata sandi yang diberikan
$sql = $koneksi->query("SELECT * FROM masyarakat WHERE username='$user' AND password='$pass'");

// Memeriksa apakah kueri memberikan hasil apa pun
$cek = mysqli_num_rows($sql);

if ($cek > 0) {
    // Jika pengguna ditemukan, ambil datanya
    $data = mysqli_fetch_array($sql);

    // Memulai sesi baru
    session_start();

    // Menyimpan data pengguna dalam sesi 
    $_SESSION['nama'] = $user;
    $_SESSION['nik'] = $data['nik'];

    // Mengarahkan pengguna ke halaman dashboard
    header('location:dashboard.php');
} else {
    // Jika tidak ada pengguna yang ditemukan, tampilkan pesan peringatan dan arahkan pengguna kembali ke halaman login
?>
    <script type="text/javascript">11 
        alert("Username atau Password Tidak Di Temukan");
        window.location = "index.php";
    </script>
<?php
}
?>

