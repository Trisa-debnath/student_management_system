

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex">
        
        <div class="bg-dark text-white p-3" style="width: 250px; height: 100vh;">
            <h2 class="text-center">Dashboard</h2>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="{{ route('student.index') }}" class="nav-link text-white">Student</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link text-white">Courses</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link text-white">Logout</a>
                </li>
            </ul>
        </div>

        
        <div class="container-fluid p-4" style="width: calc(100% - 250px);">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>