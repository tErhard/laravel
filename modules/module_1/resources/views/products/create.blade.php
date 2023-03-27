<h1>Create Product</h1>

<form method="POST" action="/products">
    @csrf

    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </div>

    <div>
        <label for="manufacturer">Manufacturer:</label>
        <input type="text" name="manufacturer" id="manufacturer">
    </div>

    <div>
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" step="0.01">
    </div>

    <div>
        <label for="production_date">Production Date:</label>
        <input type="date" name="production_date" id="production_date">
    </div>

    <div>
        <button type="submit">Create</button>
    </div>
</form>
