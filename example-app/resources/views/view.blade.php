<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Product</title>
</head>
<body>
    <h1>User Information</h1>
    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>

    <h2>Product</h2>
    @if($user->product)
        <p><strong>Name:</strong> {{ $user->product->name }}</p>
        <p><strong>Price:</strong> ${{ $user->product->price }}</p>
    @else
        <p>No product found for this user.</p>
    @endif
</body>
</html>
