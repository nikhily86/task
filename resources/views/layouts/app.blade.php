<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your App')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 bg-dark text-white">
                <div class="sidebar">
                    <h3>Task</h3>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('plans.index') }}">Manage Plans</a></li>
                        <li><a href="{{ route('combo_plans.index') }}">Manage Combo Plans</a></li>
                        <li><a href="{{ route('eligibility_criteria.index') }}">Manage Eligibility Criteria</a></li>
                        <!-- Add more options as needed -->
                    </ul>
                </div>
            </div>
            <!-- Content -->
            <div class="col-md-9">
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
