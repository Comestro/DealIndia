@extends('user.userBase')
@section('content')
<div class="relative">
    <!-- Main Content -->
    <main class="p-4 bg-gray-100 space-y-4">
        <!-- Responsive Grid Layout -->
        <div class="grid gap-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
            <!-- Profile Section -->
            <section id="profile" class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-bold mb-4 text-blue-800">Your Profile</h2>
                <div class="text-md space-y-2">
                    <p><strong>Name:</strong> {{ auth()->user()->name }}</p>
                    <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
                    <p><strong>Joined:</strong> {{ auth()->user()->created_at->format('M d, Y') }}</p>
                </div>
            </section>

            <!-- Tasks Section -->
            <section id="tasks" class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-bold mb-4 text-blue-800">Your Tasks</h2>
                <ul class="space-y-2">
                    <li class="flex justify-between items-center">
                        <span>Complete the project report</span>
                        <button class="text-sm bg-blue-800 text-white px-3 py-1 rounded hover:bg-blue-700">
                            Mark as Done
                        </button>
                    </li>
                    <li class="flex justify-between items-center">
                        <span>Update profile details</span>
                        <button class="text-sm bg-blue-800 text-white px-3 py-1 rounded hover:bg-blue-700">
                            Mark as Done
                        </button>
                    </li>
                </ul>
            </section>

            <!-- Settings Section -->
            
        </div>
        <section id="settings" class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-4 text-blue-800">Settings</h2>
            <p>Customize your settings here...</p>
            <button class="mt-4 bg-blue-800 text-white py-2 px-4 rounded hover:bg-blue-700">
                Save Changes
            </button>
        </section>
        <section class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-4 text-blue-800 ">Your Tasks</h2>
            <table class="min-w-full table-auto border-2">
                <thead>
                    <tr class="bg-blue-800 text-white">
                        <th class="px-4 py-2 text-left">Task Name</th>
                        <th class="px-4 py-2 text-left">Due Date</th>
                        <th class="px-4 py-2 text-left">Status</th>
                        <th class="px-4 py-2 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="px-4 py-2">Complete the project report</td>
                        <td class="px-4 py-2">Jan 15, 2024</td>
                        <td class="px-4 py-2 text-green-600">In Progress</td>
                        <td class="px-4 py-2">
                            <button class="bg-blue-800 text-white px-3 py-1 rounded hover:bg-blue-700">Mark as Done</button>
                        </td>
                    </tr>
                    <tr class="border-b">
                        <td class="px-4 py-2">Update profile details</td>
                        <td class="px-4 py-2">Feb 5, 2024</td>
                        <td class="px-4 py-2 text-yellow-600">Pending</td>
                        <td class="px-4 py-2">
                            <button class="bg-blue-800 text-white px-3 py-1 rounded hover:bg-blue-700">Mark as Done</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Prepare for meeting</td>
                        <td class="px-4 py-2">Jan 20, 2024</td>
                        <td class="px-4 py-2 text-red-600">Not Started</td>
                        <td class="px-4 py-2">
                            <button class="bg-blue-800 text-white px-3 py-1 rounded hover:bg-blue-700">Mark as Done</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
       
        
    </main>
</div>
@endsection
