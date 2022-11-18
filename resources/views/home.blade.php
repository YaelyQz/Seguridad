<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Seguridad en computo</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
      <!--Main Navigation-->
  <header>
    <!-- Intro settings -->
    <style>
      /* Default height for small devices */
      #intro {
        height: 600px;
        /* Margin to fix overlapping fixed navbar */
        margin-top: 58px;
      }
      @media (max-width: 991px) {
              #intro {
              /* Margin to fix overlapping fixed navbar */
              margin-top: 45px;
      	}
      }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand" target="_blank" href="https://mdbootstrap.com/docs/standard/">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1pa_ND_o8N5n6lPDIEjorfIGtlbMNRQ8yoj3v7bKIZA&s" height="16" alt="" loading="lazy"
            style="margin-top: -3px;" />
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="https://www.uacj.mx/" target="_blank">Yaely Quinonez Mendias</a>
            </li>
          </ul>
          <ul class="navbar-nav d-flex flex-row">
            <!-- Icons -->
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->

    <!-- Background image -->
    <div id="intro" class="p-5 text-center bg-image shadow-1-strong"
      style="background-image: url('https://assets.nintendo.com/image/upload/c_fill,w_1200/q_auto:best/f_auto/dpr_2.0/ncom/es_LA/games/switch/t/the-legend-of-zelda-breath-of-the-wild-switch/hero');">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white px-4">
            <h1 class="mb-3">Bienvenido</h1>

            <!-- Time Counter -->
            <h3 id="time-counter" class="border border-light my-4 p-4"></h3>

            <p>Inicio de sesion correctamente realizado.</p>


          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
  <!--Main Navigation-->

  <!--Main layout-->

  <!--Main layout-->

  <!--Footer-->
  <footer class="bg-light text-lg-start">
    <div class="py-4 text-center">
    </div>

    <hr class="m-0" />

    <div class="text-center py-4 align-items-center">

    </div>

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="https://www.uacj.mx/">Matricula 196758</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!--Footer-->

    <!-- Time Counter -->
    <script type="text/javascript">
      // Set the date we're counting down to
      var countDownDate = new Date();
      countDownDate.setDate(countDownDate.getDate() + 30);

      // Update the count down every 1 second
      var x = setInterval(function () {
        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById('time-counter').innerHTML =
          days + 'd ' + hours + 'h ' + minutes + 'm ' + seconds + 's ';

        // If the count down is finished, write some text
        if (distance < 0) {
          clearInterval(x);
          document.getElementById('time-counter').innerHTML = 'EXPIRED';
        }
      }, 1000);
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>
</html>