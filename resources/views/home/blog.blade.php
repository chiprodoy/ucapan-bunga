<section class="blogs py-5 bg-light text-center">
    <div class="container">
      <h2 class="mb-5">Blog</h2>
      <div class="row">
        @foreach ($blogs as $item)
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset('images/'.$item->cover)}}" alt="{{$item->title}}" />
                    <div class="card-body">
                    <h5>
                        <a href="{{route('public.blog.show',$item->slug)}}">{{$item->title}}</a>
                    </h5>
                    {{ strip_tags(substr($item->content,0,100)) }}
                    </div>
                </div>

            </div>
        @endforeach
      </div>
    </div>
  </section>
