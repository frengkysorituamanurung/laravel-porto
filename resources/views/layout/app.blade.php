<!-- <!DOCTYPE html>
<html>

<head>
  <title>Agnes Cicilia Marbun</title>
  <link href="{{ asset('assets/vendor/bootstrap-5.2.3-dist/css/bootstrap.min.css') }}" rel="stylesheet" />

</head>

<body>
<div class="container-fluid p-5">
  @if (session('alertType') && session('alertMessage'))
    <div class="alert alert-{{ session('alertType') }}" role="alert">
      {{ session('alertMessage') }}
    </div>
  @endif
  @yield('content')
</div>


  <script src="{{ asset('assets/vendor/bootstrap-5.2.3-dist/js/bootstrap.min.js') }}"></script>

  @yield('other-js')

</body>


</html> -->
