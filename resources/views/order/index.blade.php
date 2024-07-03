<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemesanan - Ucapan Bunga</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/OrderPage.css')}}">
</head>
<body>

  <div class="order-page text-white container py-5">
    <h2 class="mb-4 text-center">Formulir Pemesanan</h2>
    @if($errors->any())
        {!! implode('', $errors->all('<div class="alert alert-danger" role="alert">:message</div>')) !!}
    @endif
    <form name="form1" id="form1" method="POST" action="{{route('public.order.store')}}">
      @csrf
        <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" value="{{old('costumer_name')}}" class="form-control" id="costumer_name" name="costumer_name" required>
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Nomor Telepon</label>
        <input type="tel" value="{{old('costumer_phone')}}" class="form-control" id="costumer_phone" name="costumer_phone" required>
      </div>
      <div class="mb-3">
        <label for="product_uuid" class="form-label">Pilih Produk</label>
        <select class="form-select form-control" id="product_uuid" name="product_uuid" required>
          <option value="">Pilih...</option>
          @foreach ($products as $item)

            @if ($item->product_slug==$slug)
                <option selected='selected' value="{{ $item->uuid }}"> {{ $item->product_name}}</option>
            @else
                <option value="{{ $item->uuid }}"> {{ $item->product_name}}</option>
            @endif

          @endforeach

        </select>
      </div>
      <div class="mb-3">
        <label for="address" class="form-label">Alamat Pengiriman Ucapan (pastikan anda memasukkan alamat yang lengkap untuk tujuan pengiriman)</label>
        <textarea class="form-control" id="delivery_address" name="delivery_address" rows="3" required>{{old('delivery_address')}}</textarea>
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Pesan yang ingin disampaikan</label>
        <textarea class="form-control" id="notes" name="notes" rows="3" required placeholder="contoh : selamat atas ...">{{old('notes')}}</textarea>
      </div>
      <input type="hidden" name="qty" id="qty" value="1"/>
      <button type="submit" class="btn btn-success btn-lg">Pesan Sekarang</button>
      <a href="{{route('public.home')}}" class="btn btn-default btn-lg">Kembali</a>

    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
