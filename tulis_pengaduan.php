<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="halaman.css" />
  <title>Form Pengaduan Masyarakat</title>
</head>
<body>

  <div class="form-container">
    <center><h2>Form Pengaduan Masyarakat</h2></center>
    <form action="simpan_pengaduan.php" method="POST" enctype="multipart/form-data">
      <label for="tanggal">Tanggal Pengaduan</label>
      <input type="date" id="tanggal" name="tanggal" required>

      <label for="nik">NIK</label>
      <input type="text" id="nik" name="nik" value="<?php echo $_SESSION['nik']; ?>" readonly>

      <label for="laporan">Isi Laporan:</label>
      <textarea id="laporan" name="isi_laporan" rows="4" required></textarea>

      <label for="foto">Foto</label>
      <input type="file" id="foto" name="foto" accept="image/*" required>

      <button type="submit" class="submit-btn">Kirim</button>
    </form>
  </div>

</body>
</html>

  
