<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-xl font-semibold mb-4">Available Books</h3>

                    @if($books->isEmpty())
                        <p>No books available at the moment.</p>
                    @else
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($books as $book)
                                <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                                    <div class="mb-4">
                                        <img src="{{ asset('storage/' . $book->image) }}" alt="Book image" class="w-full h-56 object-cover rounded-md">
                                    </div>
                                    <h4 class="text-xl font-semibold">{{ $book->title }}</h4>
                                    <p class="text-gray-500">{{ $book->author }}</p>
                                    <p class="mt-2 text-gray-700">{{ Str::limit($book->description, 100) }}</p>
                                    <p class="mt-2 font-semibold">{{ '£' . number_format($book->price, 2) }}</p>
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
