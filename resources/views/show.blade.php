<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Book Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Book Details -->
                    <div class="mb-4">
                        <h3 class="text-2xl font-bold">{{ $book->title }}</h3>
                        <p class="text-lg text-gray-600">{{ $book->author }}</p>
                    </div>

                    <div class="mb-4">
                        <p class="text-gray-300">{{ $book->description }}</p>
                    </div>

                    <div class="mb-4">
                        <p class="text-lg font-semibold">Price: ${{ number_format($book->price, 2) }}</p>
                    </div>

                    <div class="mb-4">
                        @if($book->image)
                            <img src="{{ asset('storage/' . $book->image) }}" alt="Book Image" class="w-full h-96 object-cover rounded-md">
                        @else
                            <p>No image available.</p>
                        @endif
                    </div>

                    <div>
                        <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Back to Books List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
