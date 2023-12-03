<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
  </div>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="text-center mb-3">
        <img src="<?= base_url('assets/img/logo-panjatek.png')?>" class="" style="width:130px;" alt="">
      </div>
        <h2 class="h3 mb-3 font-weight-normal text-center">Selamat Datang di SMK PANJATEK</h2>


  <div class="row">
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
          <h5 class="card-title">Total Pemasukan SPP</h5>
            <p><?= "Rp " . number_format($total_transaksi, 2, ",", ".") ?></p>
        </div>
      </div>
  </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
          <h5 class="card-title">Total Siswa</h5>
            <p><?= $total_siswa ?></p>
        </div>
      </div>
  </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
          <h5 class="card-title">Total Admin</h5>
            <p><?= $total_user ?></p>
        </div>
  </div>
      </div>
    </div>
  </main>

    

  
