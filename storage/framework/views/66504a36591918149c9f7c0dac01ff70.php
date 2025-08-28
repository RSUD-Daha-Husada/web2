<!DOCTYPE html>
<html>
<head>
    <title>Test Form</title>
</head>
<body>
    <h1>Test Form</h1>
    <form method="POST" action="/test-debug-store">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <div>
            <label>Nama:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Spesialisasi:</label>
            <input type="text" name="specialty" required>
        </div>
        <div>
            <label>Jabatan:</label>
            <input type="text" name="title" required>
        </div>
        <div>
            <label>Deskripsi:</label>
            <textarea name="description" required></textarea>
        </div>
        <div>
            <label>Telepon:</label>
            <input type="text" name="phone" required>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html><?php /**PATH /Users/bilalabdillah/Documents/klinik-laravel/resources/views/test-form.blade.php ENDPATH**/ ?>