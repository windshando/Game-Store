<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('custom')}}/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{asset('custom')}}/assets/img/favicon.png">
  <title>
      Help Line | Developer
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{asset('custom')}}/assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{asset('custom')}}/assets/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('custom')}}/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="profile-page">
  {{-- ------------------------------------- Navbar ------------------------------------- --}}
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{route('developer.index')}}" rel="tooltip" title="Explore the Gaming World" data-placement="bottom">
          <span>Game•</span> Store
        </a>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" href="{{route('developer.index')}}">HOME</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <p>
                GAMES
              </p>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{route('developer.allGames')}}">VIEW Games</a>
                <a class="dropdown-item" href="{{route('developer.addGames')}}">ADD Games</a>
                <a class="dropdown-item" href="{{route('developer.allGames')}}">UPDATE Games</a>
                <a class="dropdown-item" href="{{route('developer.allGames')}}">DELETE Games</a>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('developer.helpline')}}">Helpline</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('developer.developerAdvertisement')}}">Advertisement</a>
      </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <p>
                <img src="{{asset($data->DEV_LOGO)}}" alt="Circle image" class="img-fluid rounded-circle shadow" style="width:25px;">Profile
              </p>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{route('developer.viewProfile')}}">VIEW Profile</a>
              <a class="dropdown-item" href="{{route('developer.editProfile')}}">EDIT Profile</a>
              <a class="dropdown-item" href="{{route('developer.changePicture')}}">CHANGE Logo</a>
              <a class="dropdown-item" href="{{route('developer.changePassword')}}">CHANGE Password</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('logout.index')}}">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  {{-- -- ------------------------------------- End Navbar --------------------------------------- --}}
  
  <div class="wrapper">
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-plain">
              <div class="card-header">
                <h1 class="profile-title text-left">Helpline</h1>
                <h5 class="text-on-back">{{$data->USERNAME}}</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-content tab-subcategories">
            <div class="tab-pane active" id="linka">
         <div class="table-responsive">
            <table class="table tablesorter " id="plain-table">
              <thead class=" text-primary">
                <tr>
                  <th class="header">
                    GAMER ID
                  </th>  
                  <th class="header">
                    ACTION
                  </th>            
                </tr>
              </thead>
              <tbody>
              @foreach($chat as $chats)
                <tr>
                  <td>
                    {{$chats->SENDER_ID}}
                  </td>
                  <td>
                    <a class="nav-link" href="{{route('developer.chat', $chats->SENDER_ID)}}">Open</a>
                  </td>            
                </tr>
               @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      </div>
    </section>
   </div>
  <!--   Core JS Files   -->
  <script src="{{asset('custom')}}/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="{{asset('custom')}}/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="{{asset('custom')}}/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="{{asset('custom')}}/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{asset('custom')}}/assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{asset('custom')}}/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!-- Chart JS -->
  <script src="{{asset('custom')}}/assets/js/plugins/chartjs.min.js"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="{{asset('custom')}}/assets/js/plugins/moment.min.js"></script>
  <script src="{{asset('custom')}}/assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('custom')}}/assets/demo/demo.js"></script>
  <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('custom')}}/assets/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>
</body>

</html>