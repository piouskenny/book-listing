<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100 flex items-center space-x-4">
                    <!-- Profile Image Placeholder -->
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png?20150327203541"
                         alt="Profile Image"
                         class="w-16 h-16 rounded-full object-cover">
                </div>
                <p class="px-6 text-gray-900 dark:text-gray-100"> Name: {{ Auth::user()->name }}</p>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Bio: {{ Auth::user()->bio }}
                </div>
                <div class="p-6">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Add Book
                     </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

