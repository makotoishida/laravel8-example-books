<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Books') }}
        </h2>
        <h3>
        </h3>
    </x-slot>

    {{-- This comment will not be present in the rendered HTML --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <h2 class="text-xl py-4">{{__('List')}}</h2>

                  <div class="m-2 p-1 text-right">
                    <a class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('books.create') }}">{{ __('Create New') }}</a>
                  </div>

                  @if (count($books) > 0)
                    <ul>
                      @each('books/booklist_row', $books, 'book')
                    </ul>
                    <div class="m-2 p-2 border rounded text-center bg-gray-200">
                      {{ $books->onEachSide(2)->links() }}
                    </div>

                  @else
                    <p>{{__('No books were found...')}}</p>
                  @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

