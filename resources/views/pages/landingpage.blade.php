<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Perpustakaan SMKN1 Kepanjen</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
        <!-- Fonts -->




        <!-- CSS -->

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        

        <!-- Js -->
        <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script>
         new WOW(
            ).init();
        </script>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-57708809-1', 'auto');
          ga('send', 'pageview');

        </script>

    </head>
    <body>


    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-6 col-sm-3">
                    <a href="#" class="logo">
                        <img src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="menu">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <!--<li><a href="#banner">Home</a></li>
                                        <li><a href="#service">Service</a></li>-->
                                        <!--<li><a href="#feature">Feature</a></li>
                                        <li><a href="#utility">Utility</a></li>
                                        <li><a href="#subscribe">Subscribe</a></li>-->
                                    </ul>
                                  
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-3">
                    <ul class="social-info">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    


    <section id="banner" class="wow fadeInUp">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6">
                   <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama <span class="required"></span>
                        </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="nama" name="nama" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required"></span>
                        </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone <span class="required"></span>
                        </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="telephone" name="telephone" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="keperluan">Keperluan <span class="required"></span>
                        </label>
                        <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <select class="form-control" name="keperluan">
                            <option>Kembalikan Buku</option>
                            <option>Pinjam Buku</option>
                            <option>Membaca Buku</option>
                          </select>
                        </div>
                      </div>
                    <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Deskripsi <span class="required"></span>
                        </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <textarea id="textarea" name="description" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
                    </div>
                  </div>
                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button class="btn btn-primary submit" id="btnSimpan">Simpan</button>
                    </div>
                  </div>

                </form>
                    </div>
                    
                </div>
                <div class="col-md-6 col-sm-6">
                    <img src="assets/images/logo1.png" alt="" >
                    <div class="block">
                        <h1>
                            Beautiful, simple and easy to use App Plus.
                        </h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nemo, corporis ipsum soluta nobis ea!
                        </p>

                        <ul class="download-btn">
                            <li>
                                <a href="#" class="btn btn-default btn-apple"> <i class="fa fa-apple"></i>App store</a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default btn-andriod"><i class="fa fa-android"></i>Play Store</a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default btn-windows"><i class="fa fa-windows"></i>Windows Store</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
