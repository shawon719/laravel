<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Details</title>
</head>
<body>
    <h1>one-to-one</h1>
    <table border="1">
        <thead>
            <tr>
                <th>company Name</th>
                <th>Product Name</th>
                <th>product Price</th>
                <th>Company id</th>
            </tr>
        </thead>
        <tbody>
             @foreach ($company as $com)
            <tr>
               
                <td>{{ $com->name }}</td>
                <td>{{ $com->product->name }}</td>
                <td>{{ $com->product->price }}</td>
                <td>{{ $com->product->company_id }}</td>
               
            </tr>
             @endforeach
        </tbody>
    </table>

    <!-- <h1>Country Wise Posts</h1>
    @foreach($countries as $country)
        <h2>Country: {{ $country->name }}</h2>
        <ul>
            @foreach($country->posts as $post)
                <li>
                    <strong>Title:</strong> {{ $post->title }} <br>
                    <strong>Content:</strong> {{ $post->body }}
                </li>
            @endforeach
        </ul>
    @endforeach -->

</body>
</html>
