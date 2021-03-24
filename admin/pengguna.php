<?php

$title = 'Pengguna';
require 'admin.php';
require 'header.php';
$query = 'SELECT * FROM user order by role desc';
$data = ambildata($conn,$query);

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
    <div class="row" style="padding: 0 15px 20px 15px;">
      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <div class="col-md-6">
          <a href="pengguna_tambah.php" class="btn btn-primary box-title"><i class="fa fa-plus fa-fw"></i> Tambah</a>
        </div>
        <div class="col-md-6 text-right">
          <button id="btn-refresh" class="btn btn-primary box-title text-right" title="Refresh Data"><i class="fa fa-refresh" id="ic-refresh"></i></button>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-container">
        <div style="padding: 0 30px 30px 30px;">
          <div class="table-responsive">
            <table class="table table-bordered thead-dark" id="table">
              <thead class="thead-dark">
                <tr>
                  <th width="5%">#</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Role</th>
                  <th width="15%">Aksi</th>
                </tr>
              <tbody>
              <?php if($data != 0): ?>
              <?php $no = 1; foreach($data as $user): ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $user['nama_user'] ?></td>
                  <td><?= $user['username'] ?></td>
                  <td><?= $user['role'] ?></td>
                  <td align="center">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="pengguna_edit.php?id=<?= $user['id_user']; ?>" data-toggle="tooltip" data-placement="bottom" title="Edit" class="btn btn-success"><i class="fa fa-edit"></i></a>
                      <a href="pengguna_hapus.php?id=<?= $user['id_user']; ?>" onclick="return confirm('Yakin hapus data ? ');" data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </div>
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