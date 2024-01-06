<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Info Users</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- script css bootstrap -->
    <link rel="stylesheet" href="../../public/bootstrap-5.3.2-dist/css/bootstrap.min.css">

    <!-- css dashboard style -->
    <link rel="stylesheet" href="../../public/css/dashboard.css">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <p class="navbar-brand col-sm-3 col-md-2 mr-0 dash-nav" style="margin-left: 20px; margin-top: 10px;">App crud 商品の管理 (しょうひんのかんり)</p>
      <br/>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../dashboard.php">
                  <span data-feather="file"></span>
                  Daftar Barang
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="TambahBarang.php">
                  <span data-feather="bar-chart-2"></span>
                  Tambah Barang
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="UsersList.php">
                  <span data-feather="users"></span>
                  Users
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Management.php">
                  <span data-feather="layers"></span>
                  Management
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Halaman Lainnya</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="../../index.php">
                  <span data-feather="file-text"></span>
                  Halaman Home(メインページ) 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../about_bandung.php">
                  <span data-feather="file-text"></span>
                  Bandung Photo (バンドンの写真)
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../contact.php">
                  <span data-feather="file-text"></span>
                  Contact (お問い合わせページ)
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <h2>Informasi Pengguna (ユーザー情報)</h2>
          <hr>
          <div class="table-responsive">
            
          <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">User</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              
              <form action="../registerprocess.php" method="post" id="text-editor" enctype="multipart/form-data">
              <input type="hidden" name="id" value="" />
                <div class="form-group" style="margin-top: 20px;">
                    <label for="nama_user">Nama Pengguna</label>
                    <input type="text" name="nama_user" class="form-control" placeholder="Nama Pengguna" required>
                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="nomor_hp_user">Nomor Handphone</label>
                    <input type="text" name="nomor_hp_user" class="form-control" placeholder="Nomor Handphone" required>
                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="email_user">Email Pengguna</label>
                    <input type="text" name="email_user" class="form-control" placeholder="Email Pengguna" required>
                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <button type="submit" name="status" value="aktif" class="btn btn-primary" style="border-radius: 3px; color: white;">Edit</button>
                    <button type="submit" name="status" value="nonaktif" class="btn btn-secondary" style="border-radius: 3px; color: white;">Simpan Nonaktif</button>
                    <a href="UsersList.php" class="btn btn-danger" style="border-radius: 3px; color: white;">Cancel</a>
                </div>
            </form>
              
            </div>
            <!-- <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap"> -->
          </div>
        </div>

          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>

    <!-- script bootstrap -->
    <script src="../public/bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
  </body>
</html>