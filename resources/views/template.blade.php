<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$title}}</title>
  <meta name="title" content="{{$title}}">
  <meta name="description" content="{{$description}}">
  <meta name="keywords" content="{{$keyword}}"/>
  <meta name="robots" content="index, follow" />

  <meta property="og:title" content="{{$title}}" />
  <meta property="og:site_name" content="Ucapan Bunga" />
  <meta property="og:description" content="{{$description}}" />
  <meta property="og:image" content="{{asset($metaImage)}}" />
  <meta property="og:url" content="{{url()->current()}}" />

  @if (Route::is('public.home'))
    <meta property="og:type" content="website" />
  @else
    <meta property="og:type" content="article" />
  @endif

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="{{$title}}" />
  <meta name="twitter:description" content="{{$description}}" />
  <meta name="twitter:image" content="{{asset($metaImage)}}" />
  <meta name="twitter:url" content="{{url()->current()}}" />

  <link rel="canonical" href="{{url()->current()}}" />

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

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Ucapan Bunga",
        "url": "https://ucapanbunga.com",
        {{-- "logo": "https://ucapanbunga.com/logo.png", --}}
        "sameAs": [
            "https://www.facebook.com/ucapanbunga",
            "https://www.instagram.com/ucapanbunga",
            {{-- "https://www.twitter.com/ucapanbunga" --}}
        ],
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+62-21-12345678",
            "contactType": "Customer Service"
        }
    }
    </script>
</head>

    @yield('content')


</html>
