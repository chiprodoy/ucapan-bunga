@extends('template')
@section('content')
<body style="background-color: rgb(168, 168, 164)">
  <section id="products" class="products py-5">
    <div class="container">
      <div class="card">
        <div class="card-body">
        @if (empty($products))
            <h4>Halaman tidak ditemukan</h4>
        @else
        <div class="row">
            <div class="col-md-8">
                <img class="img-fluid" src="{{ asset('images/'.$products->image_cover)}}" alt="gambar {{ $products->product_name}}" />
            </div>
            <div class="col-md-4">
              <h1 class="mb-5">{{ $products->product_name}}</h1>
              <ul style="list-style: none">
                <li>Pengiriman : Gratis Ongkir</li>
                <li>Ukuran : Besar</li>
              </ul>
              <a href="{{route('public.order',$products->product_slug)}}" class="btn btn-success">
                Pesan Sekarang
              </a>
            </div>
            <div class="col-12">
            <p>{!! $products->product_description !!}</p>
            <a href="{{route('public.order',$products->product_slug)}}" class="btn btn-success">
              Pesan Sekarang
            </a>
            </div>
          </div>
        @endif
        </div>
      </div>

    </div>
    {{-- end container --}}
    <div class="card">
        <div class="card-body">
            <h5>Terkait</h5>
            <ul style="list-style: none">
            @foreach ($relateProducts as $item)
                <li><a href="{{route('public.product.show',$item->product_slug)}}">{{$item->product_name}}</a></li>
            @endforeach
            </ul>
        </div>
      </div>
  </section>

  @include('footer')
</body>
@endsection
