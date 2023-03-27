<h1>{{ $product->name }}</h1>

<ul>
    <li>Manufacturer: {{ $product->manufacturer }}</li>
    <li>Price: ${{ number_format($product->price, 2) }}</li>
    <li>Production Date: {{ $product->production_date }}</li>
</ul>
