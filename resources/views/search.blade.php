<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="antialiased" style="height: 100vh">
        <nav>
            @include('partials.navigation')
        </nav>

        <div class="mx-auto w-50">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="w-5">Name</th>
                        <th scope="col" class="w-5">In stock</th>
                        <th scope="col" class="w-20">Price</th>
                        <th scope="col" class="w-50">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                        <tr onclick="window.location='/webstore/item/{{$item->id}}'">
                            <td>
                                {{$item->name}}
                            </td>
                            <td>
                                {{$item->stock}}
                            </td>
                            <td>
                                {{$item->price}}
                            </td>
                            <td>
                                {{$item->description}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
    @include('partials.footer')
</html>
