<?php

$title = 'Laporan';
require 'admin.php';
require 'header.php';
$minggu = ambilsatubaris($conn,"SELECT SUM(total_harga) AS total FROM detail_transaksi INNER JOIN transaksi ON transaksi.id_transaksi = detail_transaksi.transaksi_id WHERE status_bayar = 'Dibayar' AND WEEK(tgl_pembayaran) = WEEK(NOW())");
$bulan = ambilsatubaris($conn,"SELECT SUM(total_harga) AS total FROM detail_transaksi INNER JOIN transaksi ON transaksi.id_transaksi = detail_transaksi.transaksi_id WHERE status_bayar = 'Dibayar' AND MONTH(tgl_pembayaran) = MONTH(NOW())");
$tahun = ambilsatubaris($conn,"SELECT SUM(total_harga) AS total FROM detail_transaksi INNER JOIN transaksi ON transaksi.id_transaksi = detail_transaksi.transaksi_id WHERE status_bayar = 'Dibayar' AND YEAR(tgl_pembayaran) = YEAR(NOW())");

$penjualan = ambildata($conn,"SELECT SUM(detail_transaksi.total_harga) AS total,COUNT(detail_transaksi.paket_id) as jumlah_paket,paket.nama_paket,transaksi.tgl_pembayaran FROM detail_transaksi
INNER JOIN transaksi ON transaksi.id_transaksi = detail_transaksi.transaksi_id
INNER JOIN paket ON paket.id_paket = detail_transaksi.paket_id
WHERE transaksi.status_bayar = 'Dibayar' GROUP BY detail_transaksi.paket_id");

?>

<?php include "../assets/include/header.php"; ?>

<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
  <script>
    NProgress.configure({
      showSpinner: false
    });
    NProgress.start();
  </script>

  <div class="mobile-sticky-body-overlay"></div>

  <div class="wrapper">

    <!-- sidebar -->
    

    <div class="page-wrapper">
      <!-- Header -->
      <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="index.php">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active"><?= $title; ?></li>
    </ol>
  </div><!--/.row-->
  </div><!--/.row-->
      <div class="main-header " id="header">
        <nav class="navbar navbar-static-top navbar-expand-lg">
          <!-- Sidebar toggle button -->
          <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <h1 class="ml-5"><?= $title; ?></h1>
        </nav>
        </header>

  <div class="content-wrapper">
    <div class="content">

  
    <div class="panel panel-container">
  <div class="row  bg-white">
      <div class="col-xs-6 col-md-4 col-lg-4 no-padding">
        <div class="panel panel-teal panel-widget border-right">
          <div class="row no-padding"><i class="fa fa-xl fa-hand-holding-usd color-blue"></i>
            <div class="large"><?= htmlspecialchars($minggu['total'] == null ? 0 : 'Rp. '.$minggu['total']); ?></div>
            <div class="text-muted">Penghasilan Minggu Ini</div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-4 no-padding">
        <div class="panel panel-blue panel-widget border-right">
          <div class="row no-padding"><i class="fa fa-xl fa-hand-holding-usd color-orange"></i>
            <div class="large"><?= htmlspecialchars($bulan['total'] == null ? 0 : 'Rp. '.$bulan['total']); ?></div>
            <div class="text-muted">Penghasilan Bulan Ini</div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-4 no-padding">
        <div class="panel panel-orange panel-widget border-right">
          <div class="row no-padding"><i class="fa fa-xl fa-hand-holding-usd color-teal"></i>
            <div class="large"><?= htmlspecialchars($tahun['total'] == null ? 0 : 'Rp. '.$tahun['total']); ?></div>
            <div class="text-muted">Penghasilan Tahun Ini</div>
          </div>
        </div>
      </div>
    </div><!--/.row-->
  </div>
<br>
  <div class="row bg-white">
    <div class="col-md-12 col-lg-12 col-sm-12">
      <div class="panel panel-container">
        <div style="padding: 0 30px 30px 30px;">
          <h3 style="padding: 0 0 20px 0;">Laporan Penjualan Paket</h3>
          <div class="table-responsive">
            <table class="table table-bordered thead-dark" id="table">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Nama Paket</th>
                  <th>Jumlah Transaksi</th>
                  <th>Tanggal Transaksi</th>
                  <th>Total Hasil</th>
                </tr>
              </thead>
              <tbody>
                <?php if($penjualan != 0): ?>
                <?php $no=1; foreach($penjualan as $transaksi): ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= htmlspecialchars($transaksi['nama_paket']); ?></td>
                  <td><?= htmlspecialchars($transaksi['jumlah_paket']); ?></td>
                  <td><?= htmlspecialchars($transaksi['tgl_pembayaran']); ?></td>
                  <td><?= 'Rp. '.htmlspecialchars($transaksi['total']); ?></td>                                    
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

          
    </div>
  </div>
      <footer class="footer mt-auto">
        <div class="copyright bg-white">
          <p>
            &copy; <span id="copy-year">2019</span> Copyright Laundry UKK by
            <a class="text-primary" href="https://github.com/Iam-Hydra" target="_blank">Hydra</a>.
          </p>
        </div>
        <script>
          var d = new Date();
          var year = d.getFullYear();
          document.getElementById("copy-year").innerHTML = year;
        </script>
      </footer>
</body>

  <?php require 'footer.php'; ?>
