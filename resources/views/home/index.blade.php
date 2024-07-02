<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ucapan Bunga</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/HomePage.css')}}">
</head>
<body>

  <!-- Hero Section -->
  <section class="hero text-white text-center d-flex align-items-center justify-content-center">
    <div class="container">
      <h1 class="display-4">Ucapan Papan Bunga yang Menawan</h1>
      <p class="lead">Berikan kesan yang tak terlupakan dengan ucapan papan bunga kami</p>
      <p class="cta-description">Kirimkan cinta dan perhatian Anda dengan papan bunga kami, yang sudah dipercaya oleh ribuan pelanggan puas. Pesan sekarang dan rasakan kebahagiaannya!</p>
      <a href="{{route('public.order')}}" class="btn btn-danger btn-lg">Pesan Sekarang</a>
    </div>
  </section>

  <!-- Product Showcase -->
  <section id="products" class="products py-5 text-center">
    <div class="container">
      <h2 class="mb-5">Produk Kami</h2>
      <div class="row">
        @foreach ($products as $item)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                <img src="{{ asset('images/'.$item->image_cover)}}" class="card-img-top card-img-product" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->product_name}}</h5>
                      <a href="{{route('public.order',$item->product_slug)}}" class="btn btn-danger btn-lg">Pesan Sekarang</a>

                </div>
                </div>
            </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials py-5 bg-light text-center">
    <div class="container">
      <h2 class="mb-5">Apa Kata Pelanggan</h2>
      <div class="row">
        <div class="col-md-4">
          <blockquote class="blockquote">
            <p class="mb-0">"Papan bunga yang sangat indah dan berkualitas!" - Andi</p>
          </blockquote>
        </div>
        <div class="col-md-4">
          <blockquote class="blockquote">
            <p class="mb-0">"Layanan cepat dan ramah, sangat puas!" - Budi</p>
          </blockquote>
        </div>
        <div class="col-md-4">
          <blockquote class="blockquote">
            <p class="mb-0">"Harga terjangkau dengan kualitas terbaik." - Siti</p>
          </blockquote>
        </div>
      </div>
    </div>
  </section>

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
