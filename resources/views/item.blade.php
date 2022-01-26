<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
        
    </head>
    <body class="antialiased" style="height: 100vh">
        <nav>
            @include('partials.navigation')
        </nav>

        <div class="d-flex mx-auto w-50 sm:w-100 py-3 space-y-3">
            @if($item)
                <div class="w-50 mr-5">
                    <img src="{{url('/img/placeholder.jpg')}}" alt="Chai" class="w-100 rounded-lg"/>
                </div>
            <div class="w-50">
                <h1>{{$item->name}}</h1>
                <h4>({{$item->stock}} left in stock)</h3>
                <h6>EAN: {{$item->barcode}}</h6>
                @if($item->stock > 0)
                    <button id="addToCart" class="btn btn-success mb-3">Add to cart</button>
                @else
                    <button class="btn btn-danger mb-3" disabled>Out of stock</button>
                @endif 
                
                <div>{!! nl2br($item->description) !!}</div>
            </div>
            @else
                <h1>Item not found.</h1>
            @endif
            
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="/webstore/js/cart.js" defer></script>
    </body>
    @include('partials.footer')
</html>
