<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans text-gray-800">

    <div class="flex justify-center items-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full sm:w-96">
            <h2 class="text-2xl font-semibold text-center mb-6">Edit Student</h2>

            <form method="POST" action="{{ route('editStore') }}">
                @csrf

                <input type="text" name="student_id" hidden value="{{ $student->id }}">

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                    <input type="text" name="name" id="name" value="{{ $student->name }}" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                    <input type="email" name="email" id="email" value="{{ $student->email }}" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div class="mb-4">
                    <label for="contact" class="block text-sm font-medium text-gray-700">Contact:</label>
                    <input type="text" name="contact" id="contact" value="{{ $student->contact }}" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div class="text-center">
                    <button type="submit" class="w-full bg-green-500 hover:bg-green-400 text-white font-semibold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-300">Edit</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
