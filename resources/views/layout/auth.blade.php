<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agnes Cicilia Marbun</title>
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-5.2.3-dist/css/bootstrap.min.css') }}"/>
    @yield("other-css")
</head>

<body>
    <div class="container-fluid">
        @yield("content")
    </div>
    @yield("other-js")
  </body>
</html>