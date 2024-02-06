<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>Singer Id</th>
            <th>Singer Name</th>
            <th>Song Name</th>
        </tr>

            <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->name }}</td>
                    <td>
                        @foreach ($data->songs as $newData)
                            {{ $newData->title }}
                            <br>
                        @endforeach
                    </td>
            </tr>

    </table>
</body>

</html>
