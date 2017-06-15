<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Buku Tamu SMKN 1 Kepanjen</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{asset('assets/css/flexslider.min.css')}}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{asset('assets/css/elegant-icons.min.css')}}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{asset('assets/css/pe-icon-7-stroke.min.css')}}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{asset('assets/css/lightbox.min.css')}}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{asset('assets/css/theme.css')}}" rel="stylesheet" type="text/css" media="all" />

  <!--[if gte IE 9]>
    <link rel="stylesheet" type="text/css" href="css/ie9.css" />
<![endif]-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
</head>

<body>

  <div class="main-container">
    <a id="home" class="in-page-link"></a>

    <section class="hero-slider">
      <ul class="slides">

        <li class="register-header">
          <div class="background-image-holder parallax-background">
            <img class="background-image" alt="Background Image" src="{{asset('assets/img/13.jpg')}}">
          </div>

          <div class="container">
            <div id="notif" class="row">
              <div class="col-md-5 col-sm-6 col-md-offset-7">
                <div class="alert alert-success alert-dismissible hide" role="alert" id="errMsg">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <span id="errData"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <img alt="Meetup 2014" class="logo" src="{{asset('assets/img/logo1.png')}}">
                <h1 class="large-h1 text-white">Selamat Datang di SMKN 1 Kepanjen</h1>
                <span class="lead text-white">We're gonna make one of those blurry cafe videos and everything, so don't miss out!</span>
              </div>

              <div class="col-md-5 col-md-offset-1 col-sm-6">
                <form id="guest" class="register email-form">
                  <h1 class="text-white">Register Now</h1>
                  <div class="col-sm-12">
                    <input class="form-name validate-required" type="text" placeholder="Nama" name="nama" required>
                  </div>
                  <div class="col-sm-12">
                    <input class="form-email validate-email" type="text" placeholder="Email" name="email" required>
                  </div>
                  <div class="col-sm-12">
                    <input class="form-phone" type="text" placeholder="Telephone" name="telephone" required>
                  </div>
                  <div class="col-sm-12">
                    <input class="form-phone" type="text" placeholder="Keperluan" name="keperluan" required>
                  </div>
                  <div class="col-sm-12">
                    <input class="form-phone" type="text" placeholder="Description" name="description" required="true">
                  </div>
                  <div class="col-sm-12">
                    <button class="btn btn-primary" type="submit" id="btnSimpan">Submit</button>
                  </div>
                </form>
              </div>
            </div>
            <!--end of row-->
          </div>
          <!--end of container-->
        </li>
      </ul>
    </section>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}" )></script>
    <script src="{{asset('assets/js/skrollr.min.js')}}" )></script>
    <script src="{{asset('assets/js/flexslider.min.js')}}" )></script>
    <script src="{{asset('assets/js/smooth-scroll.min.js')}}" )></script>
    <script src="{{asset('assets/js/scripts.js')}}" )></script>
    <script>
      $(document).ready(function() {

      });
      $("#btnSimpan").click(function(event) {
        event.preventDefault();
        $('#errData').html('');
        $('#errMsg').addClass('hide');
        $('#errMsg').removeClass('alert-success alert-warning');
        $('#errData').html('');
        $.ajax({
          url: '{{route("log.store")}}',
          dataType: 'JSON',
          type: 'POST',
          contentType: 'application/x-www-form-urlencoded',
          data: $("#guest").serialize(),
          success: function(data, textStatus, jQxhr) {
            console.log('status =>', textStatus);
            console.log('data =>', data);
            $('#errMsg').addClass('alert-success');
            $('#errMsg').removeClass('hide');
            $('#errData').append("<p> Terima kasih sudah berkunjung di SMKN 1 Kepanjen. </p>");
            $('#guest').find("input[type=text], textarea").val("");
          },
          error: function(data, textStatus, errorThrown) {
            var messages = jQuery.parseJSON(data.responseText);
            console.log(errorThrown);
            $('#errMsg').addClass('alert-warning');
            $('#errMsg').removeClass('hide');
            $.each(messages, function(i, val) {
              $('#errData').append('<p>' + i + ' : ' + val + '</p>')
              console.log(i, val);
            });
          }
        });
      });
    </script>
</body>

</html>