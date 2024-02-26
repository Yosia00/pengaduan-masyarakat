<?php
session_start();
if (!isset($_SESSION['nama']))
 {
?>
  <script type="text/javascript">
    //alert("SILAHKAN LOGIN TERLEBIH DAHULU");
    //window.location = "index.php";
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
        <a href="#">
          <i class="bx bx-bar-chart-square"></i>
          <span class="link_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <!-- Tulis Pengaduan -->
      <li>
        <a href="#">
          <i class="bx bxs-edit-alt"></i>
          <span class="link_name">Tulis Pengaduan</span>
        </a>
        <span class="tooltip">Tulis Pengaduan</span>
      </li>
      <!-- Lihat Pengaduan -->
      <li>
        <a href="#">
          <i class='bx bx-search-alt-2'></i>
          <span class="link_name">Lihat Pengaduan</span>
        </a>
        <span class="tooltip">Lihat Pengaduan</span>
      </li>
      <!-- Distance Map -->
      <li>
        <a href="#">
          <i class="bx bxs-bolt"></i>
          <span class="link_name">Distance Map</span>
        </a>
        <span class="tooltip">Distance Map</span>
      </li>
      <!-- Diet Food Menu -->
      <li>
        <a href="#">
          <i class="bx bxs-heart-circle"></i>
          <span class="link_name">Diet Food Menu</span>
        </a>
        <span class="tooltip">Diet Food Menu</span>
      </li>
      <!-- Personal Record -->
      <li>
        <a href="#">
          <i class="bx bxs-pie-chart-alt"></i>
          <span class="link_name">Personal Record</span>
        </a>
        <span class="tooltip">Personal Record</span>
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