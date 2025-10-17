<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>

        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf
            <input type="email" name="email" placeholder="Email" class="w-full border rounded px-3 py-2">
            <input type="password" name="password" placeholder="Password" class="w-full border rounded px-3 py-2">
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Login</button>
        </form>

        <p class="mt-4 text-center text-sm">
            Don't have an account? <a href="{{ route('register') }}" class="text-blue-500">Register</a>
        </p>
    </div>

</body>
</html>
