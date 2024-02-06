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
                        <a href="{{url('edit/'.$std->id)}}"class="btn btn-info btn-sm">Edit </a>
                        <a href="{{url('delete/'.$std->id)}}" class="btn btn-danger btn-sm">Deleted </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
