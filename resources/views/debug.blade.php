<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debug Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Debug Authentication</h1>
        
        <div class="card mb-4">
            <div class="card-header">
                <h2>Authentication Status</h2>
            </div>
            <div class="card-body">
                <p><strong>Auth::check():</strong> {{ auth()->check() ? 'Yes' : 'No' }}</p>
                
                @if(auth()->check())
                    <p><strong>User ID:</strong> {{ auth()->user()->id }}</p>
                    <p><strong>User Name:</strong> {{ auth()->user()->name }}</p>
                    <p><strong>User Email:</strong> {{ auth()->user()->email }}</p>
                    <p><strong>Is Admin:</strong> {{ auth()->user()->is_admin ? 'Yes' : 'No' }}</p>
                @else
                    <p class="text-danger">User is not logged in</p>
                @endif
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-header">
                <h2>Session Data</h2>
            </div>
            <div class="card-body">
                <pre>{{ print_r(session()->all(), true) }}</pre>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-header">
                <h2>Cookies</h2>
            </div>
            <div class="card-body">
                <pre>{{ print_r($_COOKIE, true) }}</pre>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-header">
                <h2>Server Variables</h2>
            </div>
            <div class="card-body">
                <pre>{{ print_r($_SERVER, true) }}</pre>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h2>Actions</h2>
            </div>
            <div class="card-body">
                @if(auth()->check())
                    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                @endif
                <a href="/doctors" class="btn btn-secondary">Go to Doctors Page</a>
            </div>
        </div>
    </div>
</body>
</html>