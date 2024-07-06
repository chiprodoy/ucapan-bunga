<!-- Footer -->
<footer class="footer py-4 bg-dark text-white ">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Navigasi</h5>
                <ul style="list-style: none" class="pl-0">
                    <li><a href="{{route('public.home')}}" title="ucapanbunga.com">Home</a></li>
                    <li><a href="{{route('public.order')}}" title="pemesanan ucapan bunga">Pemesanan</a></li>
                    <li><a href="{{route('public.product')}}" title="produk ucapanbunga.com">Produk</a></li>
                    <li><a href="{{route('public.blog')}}" title="blog ucapanbunga.com">Blog</a></li>

                </ul>
            </div>

            <div class="col-md-4">
                <h5>Keywords</h5>

                    @foreach ($keywords as $item)
                        <a href='{{route('public.search.result',str_replace(' ','-',$item))}}'>{{$item}}</a>
                    @endforeach
            </div>
            <div class="col-md-4">
                <p>© 2024 Ucapan Bunga. All rights reserved.</p>
                <p>Contact: cs@ucapanbunga.com </p>
            </div>
        </div>

    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
