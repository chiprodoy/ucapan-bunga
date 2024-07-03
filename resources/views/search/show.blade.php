<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results for "{{ $query }}" - UcapanBunga.com</title>
    <meta name="description"
        content="Hasil pencarian untuk '{{ $query }}'. Temukan produk papan bunga terbaik di UcapanBunga.com.">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Search Results for "{{ $query }}"</h1>
        @if ($products->isEmpty())
            <p>No products found matching your query.</p>
        @else
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img class="card-img-top" height="200" src="{{ asset('images/'.$product->image_cover) }}" alt="{{ $product->product_name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->product_name }}</h5>
                                <p class="card-text">{{ $product->product_description }}</p>
                      <a href="{{route('public.order',$product->product_slug)}}" class="btn btn-danger btn-lg">Pesan Sekarang</a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    <div class="container text-muted mt-5">

        <h2>Jual Beli {{$query}} Online Terlengkap, Aman &amp; Nyaman di ucapanbunga.com</h2>
        <div data-testid="cntrTopProducts" class="css-3p2a5c">
            <h2 data-unify="Typography" class="css-28fzbw-unf-heading e1qvo2ff2">Daftar Harga {{$query}}
                Terbaru {{ Carbon\Carbon::now()->locale('id')->isoFormat('MMMM YYYY')}}</h2>
            <table>
                <tbody>
                <tr data-testid="trRelatedProduct">
                    <td>
                        <p data-unify="Typography" color="var(--NN1000, rgba(0, 0, 0, 0.54))"
                            class="css-1bnt4c3-unf-heading e1qvo2ff8">Harga promo karangan bunga papan duka cita
                            termurah terlaris</p>
                    </td>
                    <td>
                        <p data-unify="Typography" color="var(--NN1000, rgba(0, 0, 0, 0.54))"
                            class="css-1bnt4c3-unf-heading e1qvo2ff8">Rp318.000</p>
                    </td>
                </tr>
                <tr data-testid="trRelatedProduct">
                    <td>
                        <p data-unify="Typography" color="var(--NN1000, rgba(0, 0, 0, 0.54))"
                            class="css-1bnt4c3-unf-heading e1qvo2ff8">Harga KARANGAN BUNGA PAPAN TERBARU TERMURAH
                            BERBAGAI UCAPAN</p>
                    </td>
                    <td>
                        <p data-unify="Typography" color="var(--NN1000, rgba(0, 0, 0, 0.54))"
                            class="css-1bnt4c3-unf-heading e1qvo2ff8">Rp320.000</p>
                    </td>
                </tr>
                <tr data-testid="trRelatedProduct">
                    <td>
                        <p data-unify="Typography" color="var(--NN1000, rgba(0, 0, 0, 0.54))"
                            class="css-1bnt4c3-unf-heading e1qvo2ff8">Harga PAPAN UCAPAN KARANGAN BUNGA MINI WEDDING
                            MENINGGAL ULANG TAHUN ANNIVER</p>
                    </td>
                    <td>
                        <p data-unify="Typography" color="var(--NN1000, rgba(0, 0, 0, 0.54))"
                            class="css-1bnt4c3-unf-heading e1qvo2ff8">Rp49.999</p>
                    </td>
                </tr>
                <tr data-testid="trRelatedProduct">
                    <td>
                        <p data-unify="Typography" color="var(--NN1000, rgba(0, 0, 0, 0.54))"
                            class="css-1bnt4c3-unf-heading e1qvo2ff8">Harga Karangan Bunga Papan Duka Cita FD2.0
                            Standard </p>
                    </td>
                    <td>
                        <p data-unify="Typography" color="var(--NN1000, rgba(0, 0, 0, 0.54))"
                            class="css-1bnt4c3-unf-heading e1qvo2ff8">Rp305.000</p>
                    </td>
                </tr>
                <tr data-testid="trRelatedProduct">
                    <td>
                        <p data-unify="Typography" color="var(--NN1000, rgba(0, 0, 0, 0.54))"
                            class="css-1bnt4c3-unf-heading e1qvo2ff8">Harga Karangan Bunga Papan Dukacita Wedding
                            Selamat Jakarta Bekasi</p>
                    </td>
                    <td>
                        <p data-unify="Typography" color="var(--NN1000, rgba(0, 0, 0, 0.54))"
                            class="css-1bnt4c3-unf-heading e1qvo2ff8">Rp230.000</p>
                    </td>
                </tr>
                <tr data-testid="trRelatedProduct">
                    <td>
                        <p data-unify="Typography" color="var(--NN1000, rgba(0, 0, 0, 0.54))"
                            class="css-1bnt4c3-unf-heading e1qvo2ff8">Harga Karangan Bunga Papan Duka Cita Pernikahan
                            Selamat Congratulations</p>
                    </td>
                    <td>
                        <p data-unify="Typography" color="var(--NN1000, rgba(0, 0, 0, 0.54))"
                            class="css-1bnt4c3-unf-heading e1qvo2ff8">Rp230.000</p>
                    </td>
                </tr>
                <tr data-testid="trRelatedProduct">
                    <td>
                        <p data-unify="Typography" color="var(--NN1000, rgba(0, 0, 0, 0.54))"
                            class="css-1bnt4c3-unf-heading e1qvo2ff8">Harga Karangan Bunga Papan Hemat Murah</p>
                    </td>
                    <td>
                        <p data-unify="Typography" color="var(--NN1000, rgba(0, 0, 0, 0.54))"
                            class="css-1bnt4c3-unf-heading e1qvo2ff8">Rp229.000</p>
                    </td>
                </tr>
                <tr data-testid="trRelatedProduct">
                    <td>
                        <p data-unify="Typography" color="var(--NN1000, rgba(0, 0, 0, 0.54))"
                            class="css-1bnt4c3-unf-heading e1qvo2ff8">Harga promo karangan bunga papan
                            congratulations/selamat dan sukses</p>
                    </td>
                    <td>
                        <p data-unify="Typography" color="var(--NN1000, rgba(0, 0, 0, 0.54))"
                            class="css-1bnt4c3-unf-heading e1qvo2ff8">Rp315.000</p>
                    </td>
                </tr>
                <tr data-testid="trRelatedProduct">
                    <td>
                        <p data-unify="Typography" color="var(--NN1000, rgba(0, 0, 0, 0.54))"
                            class="css-1bnt4c3-unf-heading e1qvo2ff8">Harga Karangan Bunga Papan PROMO Disc 20%
                            TANGERANG FREE KIRIM</p>
                    </td>
                    <td>
                        <p data-unify="Typography" color="var(--NN1000, rgba(0, 0, 0, 0.54))"
                            class="css-1bnt4c3-unf-heading e1qvo2ff8">Rp229.000</p>
                    </td>
                </tr>
                <tr data-testid="trRelatedProduct">
                    <td>
                        <p data-unify="Typography" color="var(--NN1000, rgba(0, 0, 0, 0.54))"
                            class="css-1bnt4c3-unf-heading e1qvo2ff8">Harga Karangan Bunga Papan Ucapan Tangerang BSD
                            Serpong Termurah</p>
                    </td>
                    <td>
                        <p data-unify="Typography" color="var(--NN1000, rgba(0, 0, 0, 0.54))"
                            class="css-1bnt4c3-unf-heading e1qvo2ff8">Rp265.000</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p data-unify="Typography" class="css-wy5rs0-unf-heading e1qvo2ff8"><i>Data diperbaharui pada
                                3/7/2024</i></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p data-unify="Typography" class="css-1iebn5j-unf-heading e1qvo2ff8">Harga Rata-Rata Pasaran
                            Karangan Bunga Papan di Indonesia</p>
                    </td>
                    <td>
                        <p data-unify="Typography" data-testid="productTableAvePrice"
                            class="css-1iebn5j-unf-heading e1qvo2ff8">Rp312.299</p>
                    </td>
                </tr>
                <p data-unify="Typography" class="css-1tn9g83-unf-heading e1qvo2ff8">Estimasi Harga Termurah &amp;
                    Termahal Karangan Bunga Papan di Pasaran Indonesia</p>
                <tr>
                    <td>
                        <p data-unify="Typography" color="var(--NN1000, rgba(0, 0, 0, 0.54))"
                            class="css-1bnt4c3-unf-heading e1qvo2ff8">Estimasi Harga Karangan Bunga Papan Termurah di
                            Indonesia</p>
                    </td>
                    <td>
                        <p data-unify="Typography" data-testid="productTableMinPrice"
                            color="var(--NN1000, rgba(0, 0, 0, 0.54))" class="css-1bnt4c3-unf-heading e1qvo2ff8">
                            Rp16.000</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p data-unify="Typography" color="var(--NN1000, rgba(0, 0, 0, 0.54))"
                            class="css-1bnt4c3-unf-heading e1qvo2ff8">Estimasi Harga Karangan Bunga Papan Termahal di
                            Indonesia</p>
                    </td>
                    <td>
                        <p data-unify="Typography" data-testid="productTableMaxPrice"
                            color="var(--NN1000, rgba(0, 0, 0, 0.54))" class="css-1bnt4c3-unf-heading e1qvo2ff8">
                            Rp600.000</p>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div data-testid="cntrBottomContent" data-collapsed="false">
            <div>
                Lengkapi aneka kebutuhan untuk berbagai macam keperluan pesta anda dengan {{$query}} terbaik di ucapanbunga.com.
                Kini kamu bisa beli {{$query}} dengan aneka pilihan
                terlengkap mulai dari ukuran, bentuk, warna hingga bahan yang berkualitas. Sedang mencari harga
                peralatan {{$query}} terbaru saat ini, baik satuan hingga grosir? Di ucapanbunga.com, kamu bisa
                temukan daftar harga {{$query}} terbaru baik eceran hingga grosir {{ Carbon\Carbon::now()->locale('id')->isoFormat('MMMM YYYY')}} yang bisa kamu
                urutkan dari harga termurah. Tak hanya itu saja, semua transaksi jual beli online aneka peralatan
                {{$query}} juga akan terasa lebih menyenangkan dengan pilihan metode pembayaran lengkap
                seperti bebas ongkir, bayar ditempat (COD), cicilan 0% hingga promo {{$query}} untuk pengguna
                baru! Ingin butuh cepat produk {{$query}}? Tenang saja, di ucapanbunga.com tersedia pilihan
                pengiriman satu hari sampai. Jadi tunggu apalagi? Beli aneka produk {{$query}} terlengkap
                &amp; berkualitas dengan aman &amp; nyaman di ucapanbunga.com sekarang!</div>
        </div>
        <div data-testid="divRelatedLinksFind" class="css-10ib5jr">
            <h6 data-unify="Typography" class="css-hg719l-unf-heading e1qvo2ff6">Cek Aneka Rekomendasi {{$query}} Terlengkap &amp; Terbaik Lainnya</h6>
            <div class="css-1kzo3b9">
                <div class="css-3e97yw">
                    <div class="css-1qrx12s">
                        <p data-unify="Typography" data-testid="divRelatedLink"
                            color="var(--NN1000, rgba(0, 0, 0, 0.38))" class="css-y442t1-unf-heading e1qvo2ff8"><a
                                class="css-1t2miq6" href="https://ucapanbunga.com/cari/karangan-bunga-ulang-tahun"
                                target="_blank" rel="noopener noreferrer">Karangan Bunga Ulang Tahun</a></p>
                    </div>
                    <div class="css-1qrx12s">|</div>
                    <div class="css-1qrx12s">
                        <p data-unify="Typography" data-testid="divRelatedLink"
                            color="var(--NN1000, rgba(0, 0, 0, 0.38))" class="css-y442t1-unf-heading e1qvo2ff8"><a
                                class="css-1t2miq6" href="https://ucapanbunga.com/cari/karangan-bunga-mawar-merah"
                                target="_blank" rel="noopener noreferrer">Karangan Bunga Mawar Merah</a></p>
                    </div>
                    <div class="css-1qrx12s">|</div>
                    <div class="css-1qrx12s">
                        <p data-unify="Typography" data-testid="divRelatedLink"
                            color="var(--NN1000, rgba(0, 0, 0, 0.38))" class="css-y442t1-unf-heading e1qvo2ff8"><a
                                class="css-1t2miq6" href="https://ucapanbunga.com/cari/karangan-bunga-grand-opening"
                                target="_blank" rel="noopener noreferrer">Karangan Bunga Grand Opening</a></p>
                    </div>
                    <div class="css-1qrx12s">|</div>
                    <div class="css-1qrx12s">
                        <p data-unify="Typography" data-testid="divRelatedLink"
                            color="var(--NN1000, rgba(0, 0, 0, 0.38))" class="css-y442t1-unf-heading e1qvo2ff8"><a
                                class="css-1t2miq6" href="https://ucapanbunga.com/cari/karangan-bunga-plastik"
                                target="_blank" rel="noopener noreferrer">Karangan Bunga Plastik</a></p>
                    </div>
                    <div class="css-1qrx12s">|</div>
                    <div class="css-1qrx12s">
                        <p data-unify="Typography" data-testid="divRelatedLink"
                            color="var(--NN1000, rgba(0, 0, 0, 0.38))" class="css-y442t1-unf-heading e1qvo2ff8"><a
                                class="css-1t2miq6" href="https://ucapanbunga.com/cari/karangan-bunga-duka"
                                target="_blank" rel="noopener noreferrer">Karangan Bunga Duka</a></p>
                    </div>
                    <div class="css-1qrx12s">|</div>
                    <div class="css-1qrx12s">
                        <p data-unify="Typography" data-testid="divRelatedLink"
                            color="var(--NN1000, rgba(0, 0, 0, 0.38))" class="css-y442t1-unf-heading e1qvo2ff8"><a
                                class="css-1t2miq6" href="https://ucapanbunga.com/cari/karangan-bunga-pernikahan"
                                target="_blank" rel="noopener noreferrer">Karangan Bunga Pernikahan</a></p>
                    </div>
                    <div class="css-1qrx12s">|</div>
                    <div class="css-1qrx12s">
                        <p data-unify="Typography" data-testid="divRelatedLink"
                            color="var(--NN1000, rgba(0, 0, 0, 0.38))" class="css-y442t1-unf-heading e1qvo2ff8"><a
                                class="css-1t2miq6"
                                href="https://ucapanbunga.com/cari/karangan-bunga-selamat-ulang-tahun"
                                target="_blank" rel="noopener noreferrer">Karangan Bunga Selamat Ulang Tahun</a></p>
                    </div>
                    <div class="css-1qrx12s">|</div>
                    <div class="css-1qrx12s">
                        <p data-unify="Typography" data-testid="divRelatedLink"
                            color="var(--NN1000, rgba(0, 0, 0, 0.38))" class="css-y442t1-unf-heading e1qvo2ff8"><a
                                class="css-1t2miq6" href="https://ucapanbunga.com/cari/karangan-bunga-malang"
                                target="_blank" rel="noopener noreferrer">Karangan Bunga Malang</a></p>
                    </div>
                    <div class="css-1qrx12s">|</div>
                    <div class="css-1qrx12s">
                        <p data-unify="Typography" data-testid="divRelatedLink"
                            color="var(--NN1000, rgba(0, 0, 0, 0.38))" class="css-y442t1-unf-heading e1qvo2ff8"><a
                                class="css-1t2miq6"
                                href="https://ucapanbunga.com/cari/karangan-bunga-ucapan-selamat-ulang-tahun"
                                target="_blank" rel="noopener noreferrer">Karangan Bunga Ucapan Selamat Ulang
                                Tahun</a></p>
                    </div>
                    <div class="css-1qrx12s">|</div>
                    <div class="css-1qrx12s">
                        <p data-unify="Typography" data-testid="divRelatedLink"
                            color="var(--NN1000, rgba(0, 0, 0, 0.38))" class="css-y442t1-unf-heading e1qvo2ff8"><a
                                class="css-1t2miq6"
                                href="https://ucapanbunga.com/cari/karangan-bunga-papan-tangerang" target="_blank"
                                rel="noopener noreferrer">{{$query}} Tangerang</a></p>
                    </div>
                    <div class="css-1qrx12s">|</div>
                    <div class="css-1qrx12s">
                        <p data-unify="Typography" data-testid="divRelatedLink"
                            color="var(--NN1000, rgba(0, 0, 0, 0.38))" class="css-y442t1-unf-heading e1qvo2ff8"><a
                                class="css-1t2miq6" href="https://ucapanbunga.com/cari/karangan-bunga-wisuda"
                                target="_blank" rel="noopener noreferrer">Karangan Bunga Wisuda</a></p>
                    </div>
                    <div class="css-1qrx12s">|</div>
                    <div class="css-1qrx12s">
                        <p data-unify="Typography" data-testid="divRelatedLink"
                            color="var(--NN1000, rgba(0, 0, 0, 0.38))" class="css-y442t1-unf-heading e1qvo2ff8"><a
                                class="css-1t2miq6" href="https://ucapanbunga.com/cari/karangan-bunga-dukacita"
                                target="_blank" rel="noopener noreferrer">Karangan Bunga Dukacita</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
