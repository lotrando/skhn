<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- Font Awesome -->
  <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('css/mdb.css') }}" rel="stylesheet">
  <style type="text/css">
    html,
    body,
    header,
    .view {
      height: 100%;
      font-family: Roboto, sans-serif;
      font-size: 1.0rem;
    }

    p {
      font-size: 0.9rem;
      padding: 5px;
    }

    #recept {
    text-transform: uppercase;
    }

  </style>
</head>

<body class="medical-lp">

  <!--Navigation & Intro-->
  <header>

    @yield('main')

  </header>
  <!--/Navigation & Intro-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.min.js"></script>

  <!-- Custom scripts -->

  <script>
    var $input = $('recept')
    $input.keyup(function(e) {
        var max = 12;
        if ($input.val().length > max) {
          $input.val($input.val().substr(0, max));
        }
    });
  </script>

  <script>
    // Animation init
    new WOW().init();
  </script>

</body>

</html>
