<?php
session_start();
if (!isset($_SESSION['nik']))
 {
?>
  <script type="text/javascript">
    alert("SILAHKAN LOGIN TERLEBIH DAHULU");
    window.location = "index.php";
  </script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>dashboard</title>
  <link rel="stylesheet" href="dashboard.css" />
  <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Logo and Menu Button -->
    <div class="logo_content">
      <div class="logo">
        <i class="bx bx-universal-access"></i>
        <div class="logo_name">APPEM</div>
      </div>
      <i class="bx bx-menu" id="btn"></i>
    </div>

    <!-- Search Bar -->
    <div class="src">
      <i class='bx bx-search-alt'></i>
      <input type="text" placeholder="Search.." />
    </div>

    <!-- Navigation Links -->
    <ul class="nav">
      <!-- Dashboard -->
      <li>
        <a href="dashboard.php">
          <i class="bx bx-bar-chart-square"></i>
          <span class="link_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <!-- Tulis Pengaduan -->
      <li>
        <a href="?url=tulis_pengaduan">
          <i class="bx bxs-edit-alt"></i>
          <span class="link_name">Tulis Pengaduan</span>
        </a>
        <span class="tooltip">Tulis Pengaduan</span>
      </li>
      
      <!-- Lihat Pengaduan -->
      <li>
        <a href="?url=lihat_pengaduan">
          <i class='bx bx-search-alt-2'></i>
          <span class="link_name">Lihat Pengaduan</span>
        </a>
        <span class="tooltip">Lihat Pengaduan</span>
      </li>
      <!-- Log Out -->
      <li>
        <a href="logout_test.php" oneclick="return confirm('Yakin Akan keluar')" class="keluar">
          <i class="bx bx-log-in"></i>
          <span class="link_name">Log Out</span>
        </a>
        <span class="tooltip">Log Out</span>
      </li>
    </ul>
  </div>

  <main>
  <?php include 'halaman_masyarakat.php' ?>
  </main>

  <!--<div class="recent-order">
  <h2>Data Kamu</h2>
  <table>
    <thead>
      <tr>
        <th>Nik</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Telphone</th>
      </tr>
      <tr>
        <td><?php echo $_SESSION['nik'];?></td>
        <td><?php echo $_SESSION['nama'];?></td>
        <td><?php echo $_SESSION['username'];?></td>
        <td><?php echo $_SESSION['telp'];?></td>
      </tr>
    </thead>
  </table>
</div>

  
  <!-- <div class="home_content">
        <div class="text">Home Content</div>
    </div> -->

  <script>
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");
    let srcBtn = document.querySelector(".bx-search");

    btn.onclick = function() {
      sidebar.classList.toggle("active");
    };
    srcBtn.onclick = function() {
      sidebar.classList.toggle("active");
    };
  </script>
</body>

</html>