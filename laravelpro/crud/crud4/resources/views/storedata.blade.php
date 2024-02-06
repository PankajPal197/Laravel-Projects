<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>crud</title>
</head>
<body>



    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Designation</th>
            <th scope="col">Address</th>
            <th scope="col">City</th>
            <th scope="col">State</th>
            <th scope="col">Zip</th>
            <th scope="col">Action</th>


          </tr>
        </thead>
        <tbody>
            @foreach ($teachers  as $teach)
            <tr>
                <th>{{ $teach->id }} </th>
                <th>{{ $teach->name }} </th>
                <th>{{ $teach->designation }} </th>
                <th>{{ $teach->address }} </th>
                <th>{{ $teach->city }} </th>
                <th>{{ $teach->state}} </th>
                <th>{{ $teach->zip }} </th>
                <td>
                    <a href="{{ url('edit/'.$std->id) }}"class="btn btn-info btn-sm">Edit </a>
                    <a href="{{url('delete/'.$std->id)}}" class="btn btn-danger btn-sm">Deleted </a>
                </td>
            </tr>
        @endforeach
        </tbody>
      </table>








    </body>
</html>
