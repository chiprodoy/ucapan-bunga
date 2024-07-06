@extends('template')
@section('content')
<body >
    <section id="blogs" class="blogs py-5 text-center">
        <div class="container">
          <h2 class="mb-5">Blog</h2>
          <div class="row">
            @foreach ($blogs as $item)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                    <img src="{{ asset('images/'.$item->cover)}}" class="card-img-top card-img-product"
                    alt="Papan bunga ">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href='{{route('public.blog.show',$item->slug)}}'>
                            {{ $item->title}}
                            </a>
                        </h5>

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
