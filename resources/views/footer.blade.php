<!-- Footer -->
<footer class="footer py-4 bg-dark text-white ">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <ul style="list-style: none">
                    <li>Home</li>
                    <li>Order</li>
                </ul>
            </div>

            <div class="col-4">
                <h2>Keywords</h2>

                    @foreach ($keywords as $item)
                        <a href='{{route('public.search.result',$item)}}'>{{$item}}</a>
                    @endforeach
            </div>
            <div class="col-4">
                <p>© 2024 Ucapan Bunga. All rights reserved.</p>
                <p>Contact: cs@ucapanbunga.com | Phone: 08123456789</p>
            </div>
        </div>

    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
