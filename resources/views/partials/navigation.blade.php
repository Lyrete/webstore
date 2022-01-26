<div class="mx-auto w-50 sm:w-100 py-3 space-y-3">
    <div class="d-flex justify-content-between">
    <a href="/"><div class="mb-3">@include('icons.logo')</div></a>
    <button class="btn btn-primary mb-3 @if($total_price > 0) btn-success @else btn-secondary @endif" onclick="window.location='/cart'">@svg('iconoir-cart') {{$total_price}} €</button></div>
    <form method="GET" action="/search" class="d-flex">
        @csrf
        <input type="text" name="query" class="form-control me-sm-2" placeholder="Enter search terms here...">
        <input type="submit" value="Search" class="btn btn-primary ml-3">
    </form>
</div>


