<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$title}}</title>
  <meta name="title" content="{{$title}}">
  <meta name="description" content="{{$description}}">
  <meta name="keywords" content="{{$keyword}}"/>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/HomePage.css')}}">
</head>
<body>

    @yield('content')

  <!-- Footer -->
  <footer class="footer py-4 bg-dark text-white text-center">
    <div class="container">
      <p>© 2024 Ucapan Bunga. All rights reserved.</p>
      <p>Contact: info@ucapanbunga.com | Phone: 08123456789</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
