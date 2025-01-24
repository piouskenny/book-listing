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
                    <a href="{{ route('book.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Add Book
                    </a>
                </div>

                <div class="mt-6">
                    @if($books->isEmpty())
                        <p class="text-gray-500">You have not added any books yet.</p>
                    @else
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($books as $book)
                                <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                                    <div class="mb-4">
                                        <img src="{{ asset('storage/' . $book->image) }}" alt="Book Image" class="w-full h-56 object-cover rounded-md">
                                    </div>
                                    <h4 class="text-xl font-semibold">Title: {{ $book->title }}</h4>
                                    <p class="text-gray-900">Author: {{ $book->author }}</p>
                                    <p class="mt-2 text-gray-900">Description:{{$book->description }}</p>
                                    <p class="mt-2 font-semibold">{{ '#' . number_format($book->price, 2) }}</p>
                                    <a href="{{ route('book.show', $book->id) }}" class="text-xl font-semibold text-blue-600 hover:text-blue-800">
                                        show details
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


