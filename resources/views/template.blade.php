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

  <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NQL97SECS7"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-NQL97SECS7');
    </script>
</head>

    @yield('content')


</html>
