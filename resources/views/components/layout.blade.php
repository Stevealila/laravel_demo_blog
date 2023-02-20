<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Demo Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-800 h-screen text-gray-200">
    <nav class="w-full flex justify-around items-center bg-slate-900 h-16 mb-10">
        <div>
            <a class="text-xl" href="{{ url('/') }}">Home</a>
        </div>
        <div></div>
        <ul class="flex space-x-6">
            <li><a href="{{ url('/create') }}">Create</a></li>
            <li><a href="{{ url('/') }}">Register</a></li>
            <li><a href="{{ url('/') }}">Login</a></li>
            <li><a href="{{ url('/') }}">Contact</a></li>
        </ul>
    </nav>
    {{ $slot }}
</body>
</html>