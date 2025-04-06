<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <h2 class="mb-4 text-center">Employee Data FULL CRUD</h2>


        <a href="/newuser" class="btn btn-success btn-sm mb-3">ADD USER </a>

        <!-- Responsive Table -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>PASSWORD</th>
                        <th>CITY</th>
                        <th>ADDRESS</th>
                        <th>PHONE</th>
                        <th>EDIT</th>
                        <th>VIEW</th>
                        <th>DELETE</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($data as $employee)
                        <tr>
                            {{-- <td></td> --}}
                            <td>{{ $employee->id }}</td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->password }}</td>
                            <td>{{ $employee->city }}</td>
                            <td>{{ $employee->address }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td>
                                <a href="{{route('edituserview', ['id' => $employee->id])}}"
                                    class="btn btn-primary btn-sm">Edit</a>
                            </td>
                            <td>
                                <a href="{{ route('singleuser', ['id' => $employee->id])}}"
                                    class="btn btn-success btn-sm">View</a>
                            </td>


                            <td><a href="{{ route('deleteuser', ['id' => $employee->id]) }}"
                                    class="btn btn-danger btn-sm">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{$data->links()}}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>