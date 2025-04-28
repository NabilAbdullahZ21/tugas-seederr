<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Lauk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background: #f9f9f9;
        }
        h1 {
            color: #333;
        }
        .product {
            background: #fff;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }
        .price {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Daftar Lauk</h1>

    @foreach ($products as $product)
        <div class="product">
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <p class="price">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
        </div>
    @endforeach

</body>
</html>

