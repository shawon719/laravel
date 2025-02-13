<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>company</title>
</head>
<body>
    <!-- <h1>Company Profile</h1>

    <p><strong>Name:</strong> {{ $com->com_name }}</p>
    <p><strong>Email:</strong> {{ $com->contact }}</p>

    <h2>brand details</h2>
    <p><strong>Bio:</strong> {{ $bt->brand->b_name }}</p>
    <p><strong>Phone:</strong> {{ $user->brand->com_id }}</p> -->

    <table border="1">
        <thead>
            <tr>
                <td>
                    Company Name
                </td>
                <td>contact</td>
                <td>brand Name</td>
            </tr>
        </thead>
        <tbody>
             @foreach( $companies as $data)
              <tr>
                <td>{{ $data->com_name}}</td>
                <td>
                @foreach( $data->companies as $c)

                {{ $c->contact}} <br/>

                @endforeach
               </td>
               <td>
                @foreach ($c->companies as $con)
                {{ $con->b_name }}
                
                @endforeach
               </td>


              </tr>
               @endforeach
        </tbody>
    </table>
</body>
</html>