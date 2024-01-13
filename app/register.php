<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign in!</title>

    <!-- CSS 登録する (とうろく) -->
    <link rel="stylesheet" href="../public/css/authStyle.css">

    <!-- script css bootstrap -->
    <link rel="stylesheet" href="../public/bootstrap-5.3.2-dist/css/bootstrap.min.css">
  </head>

  <body class="text-center">

  <!-- navbar -->
  <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid" style="text-align: justify;">
                <a class="navbar-brand" href="#">Arizal Sabila Nurhikam</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Nav Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../contact.php">Contact</a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
        </nav>
        <!-- end of navbar -->
    
        <!-- start code -->
        <div class="container-fluid" style="margin-top: 80px;">
          <h1 style="color: grey;">Aplikasi CRUD Barang</h1>
          <p style="font-weight: bold; margin-bottom: 0px;">App crud 商品の管理 (しょうひんのかんり)</p>
          <p style="font-weight: bold;">浮かび上がるラベルを使用してフォームコントロールを構築します。<br> <span style="color: red;">:placeholder-shown pseudo-element.</span></p>
          <hr class="line"/>
        <form action="auth/RegisterProcess.php" method="post" enctype= multipart/form-data style="margin-top: 40px;">

        <div class="form-label-group auth_input">
          <label for="email_user">Gmail</label>
          <input type="email" name="email_user" id="email_user" class="form-control" autocomplete=’off’ placeholder="Gmail">
        </div>

        <div class="form-label-group auth_input">
          <label for="no_hp_user">Phone</label>
          <input type="number" name="no_hp_user" id="no_hp_user" class="form-control" autocomplete=’off’ placeholder="Phone">
        </div>

        <div class="form-label-group auth_input">
          <label for="nama_user">Username</label>
          <input type="text" name="nama_user" id="nama_user" class="form-control" autocomplete=’off’ placeholder="Username">
        </div>

        <div class="form-label-group auth_input">
          <label for="pass_user">Password</label>
          <input type="password" name="pass_user" id="pass_user" class="form-control" autocomplete=’off’ placeholder="Password">
        </div>

          <input type="hidden" name="status" id="status" value="aktif" class="form-control" autocomplete=’off’ >

        <div class="form-label-group" style="margin-top: 20px; margin-bottom: -25px;">
         <p style="font-family: arial; font-weight: bold; font-size: 0.8em;">Jika sudah ada akun? ここにログイン <a href="login.php" style="color: #0D6EFD;">Login!</a> </p>
        </div>

        <div class="form-label-group">
          <button type="submit" class="btn btn-primary"  style="border-radius: 3px; color: white; margin-top: 20px;">Register</button>
        </div>

        </form>
        
        <hr class="featurette-divider line" style="margin-top: 190px;">

        <!-- footer -->
        <footer class="container">
            <p>&copy; <?php print Date("Y"); ?> Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
        <!-- end footer -->

    </div>
    <!-- end code -->
    

    <!-- script bootstrap -->
    <script src="../public/bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
  </body>
</html>