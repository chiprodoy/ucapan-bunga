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

          <div class="text-muted text-justify">
            <p>Temukan berbagai pilihan ucapan papan bunga yang indah dan terjangkau hanya di toko kami. Kami menyediakan papan bunga murah dengan desain unik dan elegan yang sempurna untuk berbagai acara spesial Anda. Setiap papan bunga dirangkai dengan kualitas tinggi, menjamin keindahan dan daya tahan yang optimal.</p>
<h3>Keunggulan Ucapan Papan Bunga Kami</h3>
<p>&nbsp;</p>
<ol>
    <li><strong>Desain Kreatif</strong>: Tim desainer kami menciptakan papan bunga murah dengan desain yang unik dan menawan, sesuai dengan tema dan kebutuhan acara Anda.</li>
    <li><strong>Harga Terjangkau</strong>: Kami menawarkan papan bunga murah dengan harga yang kompetitif tanpa mengurangi kualitas. Setiap produk dirancang dengan penuh perhatian dan detail.</li>
    <li><strong>Layanan Pelanggan Profesional</strong>: Kami berkomitmen memberikan pelayanan terbaik mulai dari konsultasi hingga pengiriman. Setiap pesanan papan bungaakan dilayani dengan profesionalisme dan keramahan.</li>
    <li><strong>Pengiriman Tepat Waktu</strong>: Kami menjamin pengiriman papan bungayang cepat dan tepat waktu ke lokasi Anda.</li>
</ol>
<h3>Mengapa Memilih Ucapan Papan Bunga dari Kami?</h3>
<ul>
    <li><strong>Beragam Pilihan</strong>: Kami menawarkan berbagai jenis papan bunga, dari ucapan selamat hingga duka cita, yang dirancang khusus untuk memenuhi kebutuhan Anda.</li>
    <li><strong>Testimoni Pelanggan</strong>: Banyak pelanggan yang puas dengan layanan dan produk papan bunga murah kami. Testimoni positif ini menunjukkan komitmen kami dalam memberikan yang terbaik.</li>
    <li><strong>Kualitas Terjamin</strong>: Meskipun harganya terjangkau, kualitas papan bungakami tidak perlu diragukan lagi. Setiap produk dibuat dengan penuh perhatian dan ketelitian.</li>
</ul>
<h3>Cara Memesan Ucapan Papan Bunga</h3>
<ol>
    <li><strong>Pilih Produk</strong>: Kunjungi website kami dan pilih papan bunga murah yang sesuai dengan kebutuhan Anda dari katalog kami.</li>
    <li><strong>Klik tombol pesan</strong>: Untuk konsultasi lebih lanjut dan pemesanan, klik tombol pesan lalu isi formulir setelah itu anda akan diarahkan ke whatsapp cs ucapanbunga.com.</li>
    <li><strong>Lakukan Pembayaran</strong>: Kami menyediakan berbagai metode pembayaran yang aman dan nyaman untuk pembelian papan bungaAnda.</li>
    <li><strong>Pengiriman</strong>: Setelah konfirmasi pembayaran, papan bungaakan segera dikirim ke lokasi Anda dengan tepat waktu.</li>
</ol>
<h3>Hubungi Kami</h3>
<p>Untuk informasi lebih lanjut dan pemesanan papan bunga murah, jangan ragu untuk menghubungi kami. Tim kami siap membantu Anda dalam memilih ucapan papan bunga yang sesuai dengan kebutuhan Anda.</p>
          </div>
        </div>
      </section>
<section id="blog">
    <div class="container"><hr/>
        <div class="row">
            <ul style="list-style: none"><h5>Artikel</h5>
                @foreach ($blogs as $item)
                    <li><a href="{{route('public.blog.show',$item->slug)}}">{{$item->title}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
  @include('footer')

</body>
@endsection
