<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Weibo App') - Miracle Weibo</title>
      <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css')}}">
    </head>
    <body>

      @include('layouts._header')

      <div class="container">
        @yield('content')
        @include('layouts._footer')
      </div>
    </body>
</html>
