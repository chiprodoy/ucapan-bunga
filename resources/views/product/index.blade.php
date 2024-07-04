@extends('template')
@section('content')
<body >
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
                        <h5 class="card-title">
                            <a href='{{route('public.product.show',$item->product_slug)}}'>
                            {{ $item->product_name}}
                            </a>
                        </h5>
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

  @include('footer')

</body>
@endsection
