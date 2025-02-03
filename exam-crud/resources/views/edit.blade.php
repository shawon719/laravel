<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
    <h1>edit students details</h1>
    <form action="{{route('editStore')}}" method="post">
         @csrf
        <input type="text" name="student_id" hidden value="{{$student->id}}" id="">
        Name: <input type="text" name="name" value="{{$student->name}}"><br><br>
        Email: <input type="text" name="email" value="{{$student->email}}" id=""><br><br>
        Contact: <input type="text" name="contact" value="{{$student->contact}}" id=""><br><br>
        Address: <input type="text" name="address" value="{{$student->address}}"><br><br>
        <button type="submit">EDIT</button>
    </form>
</body>
</html>