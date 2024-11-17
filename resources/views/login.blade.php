<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-xs">
        <h2 class="text-xl font-semibold text-center text-gray-700 mb-6">Login</h2>

        <form action="#" method="POST">
            <div class="mb-4">
                <input type="text" placeholder="Username" id="username" name="username" required 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-6">
                <input type="password" placeholder="Password" id="password" name="password" required 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <button type="submit" 
                    class="w-full bg-blue-500 text-white py-2 rounded-lg font-semibold hover:bg-blue-600 transition duration-200">
                Login
            </button>
        </form>
    </div>

    <script  src="asset/js/script.js"></script>
</body>
</html>
