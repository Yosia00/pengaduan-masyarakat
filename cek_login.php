<?php
include 'koneksi.php';
$user=$_POST['username'];
$pass=$_POST['password'];
$sql=$koneksi -> query("select * from masyarakat where username='$user' and password='$pass' ");
$cek = mysqli_num_rows($sql);
if ($cek>0){
$data=mysqli_fetch_array($sql);
        session_start();
        $_SESSION['nama']=$data['nama'];
        $_SESSION['nik']=$data['nik'];
        $_SESSION['username']=$data['username'];
        $_SESSION['telp']=$data['telp'];
        header('location:masyarakat.php');
    }else{
        ?>
<script type="text/javascript">
alert('Username Atau Password Tidak Di Temukan');
window.location = "index.php";
</script>
<?php
    }
?> 