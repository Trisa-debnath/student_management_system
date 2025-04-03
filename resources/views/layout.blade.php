<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Management System')</title>

    <!-- Bootstrap & FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Custom Styles -->
    <style>
        body {
            display: flex;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #343a40;
            color: white;
            padding-top: 20px;
            position: fixed;
        }
        .sidebar a {
            color: white;
            padding: 10px;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover {
            background: rgba(255, 255, 255, 0.1);
        }
        .content {
            margin-left: 250px;
            padding: 20px;
            width: 100%;
        }
        @media (max-width: 992px) {
            .sidebar {
                width: 0;
                overflow: hidden;
            }
            .content {
                margin-left: 0;
            }
            #sidebarToggle {
                display: block;
            }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <nav id="sidebar" class="sidebar bg-dark">
    <div class="sidebar-header text-center py-3">
        <h4 class="text-white">Admin Panel</h4>
    </div>
    <ul class="list-unstyled components">
        <li class="active">
            <a href="dashboard"><i class="fas fa-home"></i> Dashboard</a>
        </li>
        <li>
        <a href="{{ route('student.index') }}" class="nav-link text-white"> <i class="fas fa-book"></i>Student
         </a> 
        </li>
        <li>
            <a href="#courseSubmenu" data-bs-toggle="collapse"><i class="fas fa-book"></i> Teacher</a>
            <ul class="collapse list-unstyled" id="courseSubmenu">
               
                <li><a href="{{ route('teacher.index') }}">Add Teacher</a></li>
                <li><a href="#">View Teacher</a></li>
    
            </ul>
        </li>
      
        <li>
            <a href="#courseSubmenu" data-bs-toggle="collapse"><i class="fas fa-book"></i> Subject</a>
            <ul class="collapse list-unstyled" id="courseSubmenu">
               
                <li><a href="{{ route('subject.create') }}">Add Subject</a></li>
                <li><a href="{{ route('subject.show') }}">View Subject</a></li>
    
            </ul>
        </li>
        <li>
            <a href="#courseSubmenu" data-bs-toggle="collapse"><i class="fas fa-book"></i> Courses</a>
            <ul class="collapse list-unstyled" id="courseSubmenu">
                <li><a href="{{ route('course.index') }}">All Courses</a></li>
                <li><a href="#">View courses</a></li>
            </ul>
        </li>
        
         <a href="{{ route('batches.index') }}"   ><i class="fas fa-book"></i> Batches</a>
        </li>

        <li>
            <a href="#"><i class="fas fa-calendar-check"></i> Attendance</a>
        </li>
        <li>
            <a href="#"><i class="fas fa-graduation-cap"></i> Grades</a>
        </li>
        <li>
            <a href="#"><i class="fas fa-cog"></i> Settings</a>
        </li>
        <li>
            <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </li>
    </ul>
</nav>

    <!-- Main Content -->
    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="btn btn-dark d-lg-none" id="sidebarToggle"><i class="fas fa-bars"></i></button>
            <span class="ms-3">@yield('page-title','searchbar')</span>
        </nav>

        <div class="container mt-3">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap & Sidebar Toggle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById("sidebarToggle").addEventListener("click", function() {
            let sidebar = document.querySelector(".sidebar");
            sidebar.style.width = sidebar.style.width === "250px" ? "0" : "250px";
        });
    </script>

</body>
</html>
