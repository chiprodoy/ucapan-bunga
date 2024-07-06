@extends('template')
@section('content')
<body style="background-color: rgb(168, 168, 164)">
  <section id="products" class="products py-5">
    <div class="container">
      <div class="card">
        <div class="card-body">

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
        </div>
      </div>

    </div>
  </section>

  @include('footer')
</body>
@endsection
