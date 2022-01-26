<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="antialiased">
        <nav>
            @include('partials.navigation')
        </nav>

        <div class="mx-auto w-50">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="w-20">Name</th>
                        <th scope="col" class="w-5">Amount</th>
                        <th scope="col" class="w-50">Description</th>
                        <th scope="col" class="w-25">Price</th>
                        <th scope="col" class="w-5"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td>
                                <a href="/item/{{$item->id}}">
                                    {{$item->name}}
                                </a>
                            </td>
                            <td>
                                {{$item->amount}}
                            </td>
                            <td>
                                {{$item->description}}
                            </td>
                            <td>
                                {{$item->price * $item->amount}} €<br>
                                ({{$item->amount}} pcs)
                            </td>
                            <td>
                                <form method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$item->id}}" />
                                    <input type="submit" value="Remove" class="btn btn-danger" />
                                </form>
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