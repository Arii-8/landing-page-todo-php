<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage!</title>

    <!-- script css -->
    <link rel="stylesheet" href="public/css/style.css">

    <!-- script css bootstrap -->
    <link rel="stylesheet" href="public/bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>
<body>

    <!-- start code -->
    <!-- ========== -->

    <div class="container-fluid" style="padding: 0;">

        <!-- navbar -->
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
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
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
        </nav>
        <!-- end of navbar -->

        <!-- header -->
        <div class="jumbotron text-center">
            <!-- <img src="img/IMG_9521-copy.png" class="img-square"> -->
            <h1>Arizal Sabila Nurhikam (Bandung)</h1>
            <h4>アリザル (バンドン)</h4>
            <p> --- | Junior Backend Engineer | --- </p>
        </div>
        <!-- end of header -->

        <!-- content -->
        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">

        <!-- <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div> -->

        <!-- Di sudut kota Bandung, Indonesia, hidup seorang pemuda bernama Arizal, 
                seorang programmer junior yang mahir dalam PHP dan Node.js. Arizal tumbuh di kota 
                yang unik dengan bangunan bergaya Eropa yang memukau. Setiap hari, Arizal merasakan 
                inspirasi dari keindahan kota Bandung yang khas. Meskipun masih pemula dalam dunia 
                programming, semangatnya untuk belajar tidak pernah padam. Di balkon rumahnya, Arizal 
                sering menghabiskan malam untuk memikirkan solusi-solusi kode yang inovatif. 
                Dengan latar belakang kota Bandung yang kaya akan sejarah dan kebudayaan, 
                Arizal yakin bahwa dia bisa menemukan cara untuk menggabungkan keunikan kota 
                kelahirannya dengan kecakapan teknisnya. -->

        <!-- インドネシアのバンドン市の一角に、アリザルという若者が住んでいました。彼は PHP と Node.js に精通したジュニア プログラマーです。アリザルは都会で育ちましたが、
            見事なヨーロッパ風の建物が特徴のこの街で、毎日独特の美しさを感じながら暮らしています。彼は世界的にはまだ初心者ですが、プログラミングや学習への情熱は消えることがありません。
            アリザルは自宅のバルコニーで革新的なコードの解決策を考えることが多いです。バンドンの豊かな歴史と文化が背景にあり、アリザルはこの都市の独自性を取り入れる方法を見つけられると信じています。そして、
            彼の成功は彼の技術力によるものでした。 -->


        <!-- <hr class="featurette-divider"> -->

        <div class="row featurette" style="margin: 10px;">
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" src="public/img/bdg-1.jpg" alt="Generic placeholder image">
            </div>
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Bandung Indonesia. <span class="text-muted">View city of hometown.</span></h2>
            <p class="text-muted" style="font-weight: 300; font-size: 1.1em; font-color: #5a5a5a; font-family: arial;">
                Di sudut kota Bandung, Indonesia, hidup seorang pemuda bernama Arizal, 
                seorang programmer junior yang mahir dalam PHP dan Node.js. Arizal tumbuh di kota 
                yang unik dengan bangunan bergaya Eropa yang memukau. Setiap hari, Arizal merasakan 
                inspirasi dari keindahan kota Bandung yang khas. Meskipun masih pemula dalam dunia 
                programming, semangatnya untuk belajar tidak pernah padam. Di balkon rumahnya, Arizal 
                sering menghabiskan malam untuk memikirkan solusi-solusi kode yang inovatif. 
                Dengan latar belakang kota Bandung yang kaya akan sejarah dan kebudayaan, 
                Arizal yakin bahwa dia bisa menemukan cara untuk menggabungkan keunikan kota 
                kelahirannya dengan kecakapan teknisnya.
            </p> 
                <a href="about_bandung.php" class="btn btn-primary" style="border-radius: 3px; color: white;">View more</a>
                <a href="#" class="btn btn-secondary" style="border-radius: 3px; color: white;">View simple app</a>
          </div>
        </div>
        

        <hr class="featurette-divider">
        <!-- end content -->

        

        <hr class="featurette-divider">

        <!-- footer -->
        <footer class="container">
            <p>&copy; <?php print Date("Y"); ?> Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
        <!-- end footer -->

    </div>

    <!-- ======== -->
    <!-- end code -->

    <!-- script bootstrap -->
    <script src="public/bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
</body>
</html>