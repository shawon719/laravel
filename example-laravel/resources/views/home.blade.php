<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Home Page</title>
    <!-- Use link tag to include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans text-gray-800">

    <!-- Navbar or Header -->
    <header class="bg-green-500 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h2 class="text-2xl font-semibold">CRUD App</h2>
            <a href="{{'create'}}">
                <button class="bg-yellow-400 hover:bg-yellow-300 text-black font-semibold py-2 px-6 rounded-full">
                    + Create New Entry
                </button>
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto p-8">
        <div class="bg-white p-6 rounded-xl shadow-md">
            <h3 class="text-2xl font-semibold mb-6">Home Page</h3>
            
            <!-- Table -->
            <table class="min-w-full table-auto border-collapse">
                <thead>
                    <tr class="bg-green-100">
                        <th class="px-6 py-4 text-left font-medium">ID</th>
                        <th class="px-6 py-4 text-left font-medium">Name</th>
                        <th class="px-6 py-4 text-left font-medium">Contact</th>
                        <th class="px-6 py-4 text-left font-medium">Email</th>
                        <th class="px-6 py-4 text-left font-medium">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stsData as $stData)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="px-6 py-4">{{ $stData->id }}</td>
                        <td class="px-6 py-4">{{ $stData->name }}</td>
                        <td class="px-6 py-4">{{ $stData->contact }}</td>
                        <td class="px-6 py-4">{{ $stData->email }}</td>
                        <td class="px-6 py-4 space-x-4">
                            <a href="{{route('edit', $stData->id)}}"> 
                                <button class="bg-green-400 hover:bg-green-300 text-white font-semibold py-1 px-3 rounded-full">
                                    Edit
                                </button>
                            </a>
                            <form action="{{route('delete', $stData->id)}}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-yellow-400 hover:bg-yellow-300 text-black font-semibold py-1 px-3 rounded-full">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Go to Demo Page -->
        <div class="mt-8 text-center">
            <a href="{{ url('/d') }}">
                <button class="bg-green-500 hover:bg-green-400 text-white font-semibold py-3 px-8 rounded-full">
                    Go to Demo Page
                </button>
            </a>
        </div>
    </main>

</body>
</html>
