<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    
    {{-- Page Title --}}
    <title>My Simple Blog</title>
    {{-- CSS --}}
    <link href="{{ URL::asset('/css/app.css')}}" rel="stylesheet">

    {{-- Google Fonts --}}
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>

  </head>
  <body>

    <div class="container">
      @yield('content')
    </div>

  </body>
</html>
