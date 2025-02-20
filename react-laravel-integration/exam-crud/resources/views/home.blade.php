<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
</head>
<body>
    this is home.
    <h1>CRUD operations</h1>

    <a href="{{'create'}}">
                                <button>+ create new student</button>
                            </a>

    <table border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Contact</td>
                <td>Address</td>
                <td>Action</td>
            </tr>
        <tbody>
            @foreach ($stsData as $stData)
            <tr>
                <td>{{$stData->id}}</td>
                <td>{{$stData->name}}</td>
                <td>{{$stData->email}}</td>
                <td>{{$stData->contact}}</td>
                <td>{{$stData->address}}</td>
                <td>
                     
                            <a href="{{route('edit',$stData->id)}}">
                                <button type="submit">Edit</button>
                            </a>
                    <form method="post" action="{{route('delete',$stData->id)}}">
                        @csrf
                         @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            
        </tbody>
        </thead>
    </table>
</body>
</html>