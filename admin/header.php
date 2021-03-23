<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin - <?= $title; ?> | E-Laundry</title>
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/plugins/toaster/toastr.css" rel="stylesheet">
	<link href="../assets/css/styles.css" rel="stylesheet">
	<link href="../assets/plugins/datatables/datatables.min.css" rel="stylesheet">
	
	<!--Custom Font-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <script src="https://kit.fontawesome.com/ac90a6a951.js" crossorigin="anonymous"></script>
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
			<aside class="left-sidebar bg-sidebar">
  <div id="sidebar" class="sidebar sidebar-with-footer">
    <!-- Aplication Brand -->
    <div class="app-brand">
      <a href="/index.html">
        <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
          <g fill="none" fill-rule="evenodd">
            <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
            <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
          </g>
        </svg>
        <span class="brand-name">Laundry Dashboard</span>
      </a>
    </div>
    <!-- begin sidebar scrollbar -->
    <div class="sidebar-scrollbar">

      <!-- sidebar menu -->
      <ul class="nav sidebar-inner" id="sidebar-menu">
			<li class="<?php if($title=='Dashboard'){ echo 'active'; } ?>"><a href="index.php"><i class="fa fa-dashboard">&nbsp;</i> Dashboard</a></li>
			<li class="<?php if($title=='Outlet'){ echo 'active'; } ?>"><a href="outlet.php"><i class="fa fa-store">&nbsp;</i> Outlet</a></li>
			<li class="<?php if($title=='Paket'){ echo 'active'; } ?>"><a href="paket.php"><i class="fa fa-boxes">&nbsp;</i> Paket</a></li>
			<li class="<?php if($title=='Pengguna'){ echo 'active'; } ?>"><a href="pengguna.php"><i class="fa fa-user-cog">&nbsp;</i> Pengguna</a></li>
			<li class="<?php if($title=='Pelanggan'){ echo 'active'; } ?>"><a href="pelanggan.php"><i class="fa fa-users">&nbsp;</i> Pelanggan</a></li>
			<li class="<?php if($title=='Transaksi'){ echo 'active'; } ?>"><a href="transaksi.php"><i class="fa fa-shopping-cart">&nbsp;</i> Transaksi</a></li>
			<li class="<?php if($title=='Laporan'){ echo 'active';} ?>"><a href="laporan.php"><i class="fa fa-file-alt">&nbsp;</i> Laporan</a></li>
			<li><a href="logout.php"><i class="fa fa-power-off">&nbsp;</i> Logout</a></li>
		</ul>

    </div>

    <hr class="separator" />


  </div>
</aside>
	</div><!--/.sidebar-->