<?php

$title = 'Dashboard';
require 'admin.php';
require 'header.php';
$transaksi = ambilsatubaris($conn, 'SELECT COUNT(id_transaksi) as jumlahtransaksi FROM transaksi');
$pelanggan = ambilsatubaris($conn, 'SELECT COUNT(id_member) as jumlahmember FROM member');
$outlet = ambilsatubaris($conn, 'SELECT COUNT(id_outlet) as jumlahoutlet FROM outlet');
$query = "SELECT transaksi.*,member.nama_member , detail_transaksi.total_harga FROM transaksi INNER JOIN member ON member.id_member = transaksi.member_id INNER JOIN detail_transaksi ON detail_transaksi.transaksi_id = transaksi.id_transaksi   ORDER BY transaksi.id_transaksi DESC LIMIT 10";
$data = ambildata($conn, $query);

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
      <div class="main-header " id="header">
        <nav class="navbar navbar-static-top navbar-expand-lg">
          <!-- Sidebar toggle button -->
          <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
          </button>
        </nav>
        <div class="row">
          <ol class="breadcrumb">
            <li><a href="index.php">
                <em class="fa fa-home"></em>
              </a></li>
            <li class="active"><?= $title; ?></li>
          </ol>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header"><?= $title; ?></h1>
          </div>
        </div>
        </header>

        <div class="content-wrapper">
          <div class="content">

            <div class="panel panel-container">
              <div class="row">
                <div class="col-xs-6 col-md-4 col-lg-4 no-padding">
                  <div class="panel panel-teal panel-widget border-right">
                    <div class="row no-padding"><i class="fa fa-xl fa-store color-blue"></i>
                      <div class="large"><?= htmlspecialchars($outlet['jumlahoutlet']); ?></div>
                      <div class="text-muted">Outlet</div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-md-4 col-lg-4 no-padding">
                  <div class="panel panel-blue panel-widget border-right">
                    <div class="row no-padding"><i class="fa fa-xl fa-users color-orange"></i>
                      <div class="large"><?= htmlspecialchars($pelanggan['jumlahmember']); ?></div>
                      <div class="text-muted">Pelanggan</div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-md-4 col-lg-4 no-padding">
                  <div class="panel panel-orange panel-widget border-right">
                    <div class="row no-padding"><i class="fa fa-xl fa-shopping-cart color-teal"></i>
                      <div class="large"><?= htmlspecialchars($transaksi['jumlahtransaksi']); ?></div>
                      <div class="text-muted">Transaksi</div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/.row-->
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-container">
                  <div style="padding: 0 30px 30px 30px;">
                    <h3 style="padding: 0 0 20px 0;">10 Transaksi Terbaru</h3>
                    <div class="table-responsive">
                      <table class="table table-bordered thead-dark" id="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Invoice</th>
                            <th>Member</th>
                            <th>Status</th>
                            <th>Pemabayaran</th>
                            <th>Total Harga</th>
                            <th width="15%">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php if ($data != 0) : ?>
                            <?php $no = 1;
                            foreach ($data as $transaksi) : ?>
                              <tr>
                                <td><?= $no++ ?></td>
                                <td><?= htmlspecialchars($transaksi['kode_invoice']); ?></td>
                                <td><?= htmlspecialchars($transaksi['nama_member']); ?></td>
                                <td><?= htmlspecialchars($transaksi['status']); ?></td>
                                <td><?= htmlspecialchars($transaksi['status_bayar']); ?></td>
                                <td><?= 'Rp. ' . htmlspecialchars($transaksi['total_harga']); ?></td>
                                <td align="center">
                                  <a href="transaksi_detail.php?id=<?= htmlspecialchars($transaksi['id_transaksi']); ?>" data-toggle="tooltip" data-placement="bottom" title="Edit" class="btn btn-success btn-block">Detail</a>
                                </td>
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