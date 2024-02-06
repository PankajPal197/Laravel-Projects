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
<div class="col-sm-6">
    <table class="'table table-hover">
        <thead>
            <tr>
                <th scope="col">Id </th>
                <th scope="col">name </th>
                <th scope="col">city </th>
                <th scope="col">marks </th>
                <th scope="col">action </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($xyz  as $std)
                <tr>
                    <th>{{ $std ->id}} </th>
                    <th>{{ $std -> name}} </th>
                    <th>{{ $std -> city}} </th>
                    <th>{{ $std -> marks}} </th>
                    <td>
                        <a href="{{ url('edit/'.$std->id) }}"class="btn btn-info btn-sm">Edit </a>
                        <a href="{{url('delete/'.$std->id)}}" class="btn btn-danger btn-sm">Deleted </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </body>
</html>
