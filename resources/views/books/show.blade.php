<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Books') }}
        </h2>
        <h3>
        </h3>
    </x-slot>

    {{-- This comment will not be present in the rendered HTML --}}
  <div x-data="{ open: false }">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <h2 class="text-xl py-4">{{__('Detail')}}</h2>

                  <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                      <div class="grid grid-cols-6 gap-6">

                        <div class="col-span-6 sm:col-span-3">
                          <label for="title" class="block text-sm font-medium text-gray-700">{{__('Title')}}</label>
                          <div class="mt-1 p-2 bg-yellow-50 border border-gray-50 block w-full shadow-sm sm:text-sm rounded-md">
                            {{ $book->title }}
                          </div>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                          <label for="author" class="block text-sm font-medium text-gray-700">{{__('Author')}}</label>
                          <div class="mt-1 p-2 bg-yellow-50 border border-gray-50 block w-full shadow-sm sm:text-sm rounded-md">
                            {{ $book->author }}
                          </div>
                        </div>

                        <div class="col-span-6">
                          <label for="url" class="block text-sm font-medium text-gray-700">URL</label>
                          <div class="mt-1 p-2 bg-yellow-50 border border-gray-50 block w-full shadow-sm sm:text-sm rounded-md">
                            {{ $book->url }}&nbsp;
                          </div>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                          <span class="text-xs">{{__('Created At')}}: {{ $book->created_at }}</span>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                          <span class="text-xs">{{__('Updated At')}}: {{ $book->updated_at }}</span>
                        </div>
                      </div>
                    </div>

                    <div class="px-2 py-3 bg-gray-50 grid grid-cols-8 gap-x-4">
                        <a class="col-span-2 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-400 hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
                          href="{{ route('books.index') }}">{{ __('List') }}</a>

                        <div class="col-span-2">&nbsp;</div>

                        <a class="col-span-2 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                          href="{{ route('books.edit', $book) }}">{{ __('Edit') }}</a>


                        <button class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm"
                          @click="open = true">{{__('Delete')}}</button>
                      </div>

                  </div>


                </div>
            </div>
        </div>
    </div>

    <x-modal-confirm >
      <x-slot name="title">{{__('Deleting book')}}</x-slot>
      <x-slot name="button">DELETE</x-slot>
      <x-slot name="button_form">
        <form action="{{ route('books.destroy', $book) }}" method="POST"
          class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
          @method('DELETE')
          @csrf()
          <button type="submit">{{ __('Delete') }}</button>
        </form>
      </x-slot>

      {{__('Are you sure to delete the book?')}}

    </x-modal-confirm>
  </div>

</x-app-layout>




