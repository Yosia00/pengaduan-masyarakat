
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
    <meta name="viewport" content="widht=device-widht">
</head>
<body>
    <div class="container">
        <div class="title">Register Pengaduan Masyarakat</div>
            <form action="simpan_masyarakat.php" method="POST" onsubmit="return validateform()">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Nik</span>
                        <input type="text" name="nik" placeholder="Enter Your Nik" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Nama</span>
                        <input type="text" name="nama" placeholder="Enter Your Name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" name="username" placeholder="Enter Your Username" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="password" placeholder="Confirm Your Password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Telp</span>
                        <input type="text" name="telp" placeholder="Enter Your Telp" >
                    </div>
                    </div> 
             </span>
                    <div class="button">
                        <input type="submit" value="Register">
                    </div>
                    <center><p>Already have an account? <a href="index.php">Login</a></p></center>
                </div>
            </form>
            <script>
                function validateForm(){
                //dapatkan nilai dari kotak form input
                var nik =document.getElementById("nik").value;
                var karakterKhusus = /[-_$!@#^&*()+=\[\]{};':"\\|,.<script>/?]+/;

                //periksa kotak input nik tidsk kosong dan berupa angka
                if(isNaN(nik)) {
                    alert("Masukan Data Dengan Benar Dan Pastikan Nik Berupa Angka");
                    return false; //Menghentikan pengiriman formulir
                } else if(nik === "") {
                    alert("nik tidak boleh koosng");
                    return false; //Menghentikan pengiriman formulir
                }
                //priksa apakah Passsword menggunakan karakter khusus atau tidak
                if (password === "") {
                    alert("Password Tidak Boleh Kosong");
                    return false; //menghentikan pengiriman formulir
                } else if(!karakterKhusus.test(password)) {
                    alert("Password Harus Mengandung Setidak Nya Karakter Khusus(-, _, $, !, @, #, dll).");
                    return false; //Menghentikan pengiriman formulir
                }
                //lanjut pengiriman formulir jika semu validaasi berhasil
                return true;
            }
        </script>
        </div>
    </div>
</body>
</html>
