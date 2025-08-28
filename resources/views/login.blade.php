<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body { font-family: Arial; padding: 50px; }
        .form-group { margin-bottom: 15px; }
        input { padding: 10px; width: 300px; }
        button { padding: 10px 20px; background: #007bff; color: white; border: none; }
        .error { color: red; margin-bottom: 15px; }
    </style>
</head>
<body>
    <h1>LOGIN ADMIN</h1>
    
    @if($errors->any())
        <div class="error">{{ $errors->first('email') }}</div>
    @endif
    
    <form method="POST" action="/login">
        @csrf
        <div class="form-group">
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit">LOGIN</button>
    </form>
</body>
</html>