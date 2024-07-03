@extends('template')
@section('content')
  <!-- Hero Section -->
  <section class="hero text-white text-center d-flex align-items-center justify-content-center">
    <div class="container">
      <h1 class="display-4">Ucapan Papan Bunga yang Menawan</h1>
      <p class="lead">Berikan kesan yang tak terlupakan dengan ucapan papan bunga kami</p>
      <p class="cta-description">Kirimkan cinta dan perhatian Anda dengan papan bunga kami, yang sudah dipercaya
        oleh ribuan pelanggan puas. Pesan sekarang dan rasakan kebahagiaannya!</p>
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
                <img src="{{ asset('images/'.$item->image_cover)}}" class="card-img-top card-img-product"
                alt="Papan bunga ">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->product_name}}</h5>
                      <a href="{{route('public.order',$item->product_slug)}}" class="btn btn-danger btn-lg">
                        Pesan Sekarang
                      </a>
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
@endsection
