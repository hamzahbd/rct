<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('assets/css/card.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <section class="header">
        <div>
          <nav class="navbar navbar-expand-lg navbar-light container ">
            <a class="navbar-brand" href="#"><img src="./assets/img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
    
          
            @include('partial.navbar-item')
          </nav>   
    </section> 

    <section style="min-height: 76vh">
        <div class=" mx-5">
            <div class="row">
              
              @if(session()->has('success'))
                    <div class="alert alert-success mt-5" role="alert">
                      {{ session('success') }}
                    </div>
                    @endif

                <div class="col-8 mt-4 ">
                    <h1 class="border-bottom pb-4 border-dark ">CART</h1>

                    @if ($cart->product() != NULL)
                    @foreach ($cart->product as $item)
                    <div class="d-flex text-center border-bottom pb-4 border-dark">    
                        <div class="d-flex pt-3">
                            <img class="img-card img-fluid overflow-hidden" @if($item->image) src="{{ asset('storage/'.$item->image) }}" 
                            @else src="{{ asset('assets/img/noImage.png') }}" 
                            @endif>
                            
                            <div class="mt-5 ps-2 pt-4" >
                                    <span class="fw-bold pe-3 ps-5 ">{{ $item->nama }}</span>
                                    
                            </div>
                            <div class="mt-5 ps-3 pe-3 pt-4">
                                <span>Rp. {{ number_format($item->harga) }}</span>
                                
                                
                            </div>
      
                            <div class="d-flex mt-5 ps-5 pt-4 pe-3">
                              <button class="btnChange fw-bold">-</button>
                              <div class="mx-2 nominal">{{ $item->pivot->jumlah }}</div>
                                <button class="btnChange fw-bold">+</button>
                            </div>
                           

                            <form action="/cart/{{ $item->slug }}/removeFromCart" method="post" class="d-inline">
                              @method('delete')
                              @csrf
                              <div class="mt-5 ps-5 pe-3 pt-4 " >
                                <button type="submit" class="btnChange fw-bold">X</button>
                            </div>
                            </form>
                    
                        </div>
                      </div>
      
                    @endforeach
                    @else
                        Belum ada Item
                    @endif
                    
                   

                

          <div class="continue-shopping pt-3">
            <h6 > <a class=" continue-shopping " href="/products">Continue-Shopping</a> </h6>
          </div>
                
            </div>

            

            <div class="col-4 col-right pt-5 ps-4" style="min-height: 76vh">
                <h5 class="fw-bold">ORDER SUMMARY</h5>
                @foreach ($cart->product as $item)
                  <div class="d-flex justify-content-between pt-2 ">
                    <span>{!! '<strong>' . $item->nama  . '</strong>    X' . $item->pivot->jumlah!!}</span>
                    <span>{{ 'RP. ' .  number_format($item->pivot->jumlah * $item->harga) }}</span>
                  </div>
                @endforeach
                

                <div class="d-flex justify-content-between pt-2 ">
                  <span>Delivery Free</span>
                  <span>RP. 50.000,00</span>
                </div>

                <div class="d-flex justify-content-between pt-4 fw-bold  ">
                  <span>Total Cost</span>
                  <span>{{ 'RP. ' . number_format($cart->total + 50000) }}</span>
                </div>

                <div class="btl-checkout text-center pt-4 ">
                  <button class="border-0 text-light ">CHECKOUT</button>
                </div>

            </div>
            </div>
        </div>
    </section>

    @include('partial.mini-footer')
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/countMe/countMe.min.js') }}"></script>
</body>
</html>
