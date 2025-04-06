<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Single User Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ✅ Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .user-card:hover {
            transform: scale(1.02);
            transition: 0.3s ease;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Single User Data</h1>

        @foreach ($data as $id => $employee)
            <div class="card mb-4 shadow-sm user-card">
                <div class="card-body">
                    <h4 class="card-title text-primary">{{ $employee->name }}</h4>
                    <p class="mb-2"><strong>Email:</strong> {{ $employee->email }}</p>
                    <p class="mb-2"><strong>Password:</strong> {{ $employee->password }}</p>
                    <p class="mb-2"><strong>City:</strong> {{ $employee->city }}</p>
                    <p class="mb-2"><strong>Address:</strong> {{ $employee->address }}</p>
                    <p class="mb-0"><strong>Phone:</strong> {{ $employee->phone }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <!-- ✅ Bootstrap JS (optional for components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
