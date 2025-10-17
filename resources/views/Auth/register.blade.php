<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>

        <form action="{{ route('register') }}" method="POST" class="space-y-4">
            @csrf
            <input type="text" name="name" placeholder="Name" class="w-full border rounded px-3 py-2">
            <input type="email" name="email" placeholder="Email" class="w-full border rounded px-3 py-2">
            <input type="password" name="password" placeholder="Password" class="w-full border rounded px-3 py-2">
            <input type="password" name="password_confirmation" placeholder="Confirm Password" class="w-full border rounded px-3 py-2">
            <button type="submit" class="w-full bg-green-500 text-white py-2 rounded hover:bg-green-600">Register</button>
        </form>

        <p class="mt-4 text-center text-sm">
            Already have an account? <a href="{{ route('login') }}" class="text-blue-500">Login</a>
        </p>
    </div>

</body>
</html>
