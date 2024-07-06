@extends('template')
@section('content')
<body style="background-color: rgb(168, 168, 164)">
  <section id="products" class="products py-5">
    <div class="container">
      <div class="card">
        <div class="card-body">
            @if (empty($blogs))
                Blog tidak ditemukan
            @else
            <div class="row">
                <div class="col-md-8">
                    <img class="img-fluid" src="{{ asset('images/'.$blogs->cover)}}" alt="{{ $blogs->cover}}" />
                </div>
                <div class="col-md-12">
                  <h1 class="mb-5">{{ $blogs->title}}</h1>
                </div>
                <div class="col-md-12">
                <p>{!! $blogs->content !!}</p>
                <a href="{{route('public.order','b0f0b-papan-bunga-ucapan-selamat-ukuran-besar')}}" class="btn btn-success">
                  Pesan Sekarang
                </a>
                </div>
              </div>
            @endif
        </div>
      </div>
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
    </div>
  </section>

  @include('footer')
</body>
@endsection
