<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Posts</title>
</head>
<body>
    <h1>has many through</h1>
     <h1>Country Wise Posts</h1>
   <!-- @foreach($countries as $country)
        <h2>Country: {{ $country->country_name}}</h2>
        <ul>
            @foreach($country->posts as $post)
                <li>
                    <strong>Title:</strong> {{ $post->title }} <br>
                    <strong>Content:</strong> {{ $post->body }}
                </li>
            @endforeach
        </ul>
    @endforeach -->


    <!-- <table border="1" style="border-collapse:collapse">
        <thead>
            <tr>
                <td>Country</td>
                <td>Title</td>
                <td>Content(body)</td>
            </tr>
        </thead>
        <tbody>
           @foreach ($countries as $country)
                @foreach ($country->posts as $post)
                <tr>
                    <td>
                        {{ $country->country_name }}
                    </td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    
                </tr>
           @endforeach
                @endforeach
        </tbody>
    </table> -->


    <!-- <h1>Country Wise Posts</h1> -->
<table border="1" style="border-collapse:collapse">
    <thead>
        <tr>
            <th>Country Name</th>
            <th>Post Titles</th>
            <th>Post Contents</th>
        </tr>
    </thead>
    <tbody>
        @foreach($countries as $country)
            <tr>
                <td>{{ $country->country_name }}</td>
                <td>
                    @foreach($country->posts as $post)
                        <strong>{{ $post->title }}</strong><br>
                    @endforeach
                </td>
                <td>
                    @foreach($country->posts as $post)
                        {{ $post->body }}<br>
                    @endforeach
                </td>
            </tr>
        @endforeach
    </tbody>
</table>










<!-- <h1>Country Wise Posts</h1> -->
<!-- <table border="1">
    <thead>
        <tr>
            <th>Country Name</th>
            <th>Posts</th>
        </tr>
    </thead>
    <tbody>
        @foreach($countries as $country)
            <tr>
                <td>{{ $country->country_name }}</td>
                <td>
                    <ul>
                        @foreach($country->posts as $post)
                            <li>
                                <strong>Title:</strong> {{ $post->title }} <br>
                                <strong>Content:</strong> {{ $post->body }} <br><br>
                            </li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        @endforeach
    </tbody>
</table> -->
</body>
</html>
