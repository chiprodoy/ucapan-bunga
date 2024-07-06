@extends('template')
@section('content')
<body>
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
                    <h5 class="card-title"><a title="{{$item->product_name}}" href='{{route('public.product.show',$item->product_slug)}}'>{{ $item->product_name}}</a></h5>
                      <a href="{{route('public.order',$item->product_slug)}}" title="Beli {{$item->product_name}}" class="btn btn-danger btn-lg" >
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
    {{-- @include('home.testimoni') --}}

    @include('home.blog')

  @include('footer')

</body>
@endsection
