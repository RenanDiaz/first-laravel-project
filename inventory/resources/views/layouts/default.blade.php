<!DOCTYPE <!DOCTYPE html>
<html>
<head>
  @include('includes.head')
</head>
<body>
  <div class="container mt-5">
    <div class="header">
      @include('includes.header')
    </div>

    @yield('content')

    <div class="footer fixed-bottom">
      @include('includes.footer')
    </div>
  </div>
</body>
</html>