<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage!</title>

    <!-- script css -->
    <link rel="stylesheet" href="public/css/contact.css">

    <!-- script css bootstrap -->
    <link rel="stylesheet" href="public/bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>
<body>

    <!-- start code -->
    <!-- メインのランディング ページのプロジェクトを始めます。 -->
    <!-- ========== -->

    <div class="container-fluid" style="padding: 0px;">

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
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
        </nav>
        <!-- end of navbar -->

        <!-- header -->
        <div class="jumbotron p-5 p-md-5 text-white rounded" style="background-color: #222;">
        <div class="col-md-6 px-0" style="margin-top: 40px;">
            <!-- <img src="img/IMG_9521-copy.png" class="img-square"> -->
          <h1 class="display-4 font-italic">Arizal Sabila Nurhikam (Bandung)</h1>
          <h4 class="lead my-3">アリザル (バンドン)</h4>
          <p class="lead my-3">Junior Backend Engineer</p>
          <!-- <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p> -->
        </div>
      </div>

        <!-- end of header -->

        <!-- content -->
        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">


        <!-- インドネシアのバンドン市の一角に、アリザルという若者が住んでいました。彼は PHP と Node.js に精通したジュニア プログラマーです。アリザルは都会で育ちましたが、
            見事なヨーロッパ風の建物が特徴のこの街で、毎日独特の美しさを感じながら暮らしています。彼は世界的にはまだ初心者ですが、プログラミングや学習への情熱は消えることがありません。
            アリザルは自宅のバルコニーで革新的なコードの解決策を考えることが多いです。バンドンの豊かな歴史と文化が背景にあり、アリザルはこの都市の独自性を取り入れる方法を見つけられると信じています。そして、
            彼の成功は彼の技術力によるものでした。 -->




        <!-- <hr class="featurette-divider"> -->

        <div class="row featurette" style="margin: 10px;">
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" src="public/img/img-2.jpg" alt="Generic placeholder image">
            </div>
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Bandung Indonesia. <span class="text-muted">View city of hometown.</span></h2>
            <p class="text-muted" style="font-weight: 300; font-size: 1.1em; font-color: #5a5a5a; font-family: arial;">
                Di sudut kota Bandung, Indonesia, Arizal sebagai siswa SMK jurusan Teknik Komputer dan Jaringan dan kemudian 
                mahasiswa Teknik Informatika, seorang programmer junior yang mahir dalam PHP dan Node.js. Siap untuk memulai 
                perjalanan sebagai seorang profesional di bidangnya.
                <br>
                <span style="font-family: arial; font-weight: bold; font-size: 0.8em;">
                バンドン、インドネシアの街角に、Arizalという名の若者が住んでいます。彼はコンピューターおよびネットワーク工学科の学生で、
                その後情報工学科の学生となりました。彼はPHPとNode.jsに精通した初心者のプログラマーです。
                彼は自分の専門分野でプロとしての道を歩み始める準備ができています。
                </span>
            </p> 
                <a href="about_bandung.php" class="btn btn-primary" style="border-radius: 3px; color: white;">View more</a>
                <!-- <a href="#" class="btn btn-secondary" style="border-radius: 3px; color: white;">View simple app</a> -->
          </div>
        </div>
        

        <hr class="featurette-divider">
        <!-- end content -->


        <!-- Contact section start -->
        <div class="row">
        <section id="contact" class="contact">
        <h2 class="text-center"><span>Kontak</span> Kami</h2>
        <p class="text-center">Untuk berkomunikasi dengan saya, seorang Backend Junior, silakan hubungi saya melalui email di [Email form] atau melalui telepon di [Nomor Telepon form].</p>

        <div class="row">
            <div class="col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.60913159252!2d107.57294400332763!3d-6.903273889721198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1673981148568!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
            </div>
            <div class="col-lg-6">
            <form action="">
            <div class="input-group">
                <i data-feather="user"></i>
                <input type="text" placeholder="nama">
            </div>
            <div class="input-group">
                <i data-feather="mail"></i>
                <input type="text" placeholder="email">
            </div>
            <div class="input-group">
                <i data-feather="phone"></i>
                <input type="text" placeholder="no hp">
            </div>
            <button type="submit" class="btn">Kirim pesan!</button>
            </form>
            </div>

            

        </div>
        </section>
        </div>
        <!-- end of contact -->
        

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