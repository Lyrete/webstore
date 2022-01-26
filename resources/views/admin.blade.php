<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="antialiased" style="height: 100vh">
        <nav>
            @include('partials.navigation')
        </nav>
        <div class="container w-50">
        <h3>
            Testing panel to add products.
        </h3>
        <p>Currently you can add products using this form, technically no attributes are required as the necessary defaults will be made on addition.</p>
        <form method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="price">Price (in EUR)</label>
                <input type="number" name="price" class="form-control w-25" min="0" step=".01"/>
            </div>
            <div class="form-group">
                <label for="price">Products in stock</label>
                <input type="number" name="stock" class="form-control w-25"/>
            </div>
            <div class="form-group">
                <label for="barcode">EAN Barcode (max 13 charachters)</label>
                <input type="text" name="barcode" maxlength="13" class="form-control w-25"/>
            </div>
            <div class="form-group">
                <label for="description">Product description</label>
                <textarea name="description" class="form-control" maxlength="1000"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Add product</button>            
        </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
    @include('partials.footer')
</html>