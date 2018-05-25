<html>
    <head>
        <title>Laravell Test - @yield('title')</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    </head>
    <body>
        @section('navbar')
          <div class="topnav">
            {!! link_to_route('home', 'Home', [], ['type'=>'button', 'class'=>isActiveRoute('home')]) !!}
            {!! link_to_route('admin.skills.index', 'Skills', [], ['type'=>'button', 'class'=>isActiveRoute('admin.skills.index')]) !!}
            <div style="float: right;">
              {!! link_to_route('logout', 'Logout', [], ['type'=>'button']) !!}
            </div>
          </div>
        @show
        <div id="app" class="container">
            <h1> Awesome Homepage! </h1>
            @yield('content')
        </div>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>