<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>
<body>
    <h1>this is insert page</h1>

    <form action="{{route('store')}}" method="post">
        @csrf
        <div>
                Name: <input type="text" required name="name"><br><br>
                Email: <input type="text" name="email" required><br><br>
                Contact: <input type="text" name="contact" required><br><br>
                Addrss: <input type="text" name="address" required><br><br>
                <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>