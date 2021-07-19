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
                  <h2 class="text-xl py-2">{{__('Create New')}}</h2>

                  <div class="mt-10 sm:mt-0">
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                      <div class="mt-5 md:mt-0 md:col-span-3">
                        <form action="{{route('books.store')}}" method="POST">
                          @csrf()
                          <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                              <div class="grid grid-cols-6 gap-6">

                                @if ($errors->any())
                                  <div class="col-span-6 m-4 p-2  border-2 text-red-500  border-red-400  rounded-md">
                                    <ul>
                                      @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                      @endforeach
                                    </ul>
                                  </div>
                                @endif

                                <div class="col-span-6 sm:col-span-3">
                                  <label for="title" class="block text-sm font-medium text-gray-700">{{__('Title')}}</label>
                                  <input type="text" name="title" id="title" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm  rounded-md @error('title') border-red-400 @else border-gray-300 @enderror"
                                    value="{{ old('title', $book->title) }}" autofocus>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                  <label for="author" class="block text-sm font-medium text-gray-700">{{__('Author')}}</label>
                                  <input type="text" name="author" id="author" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md @error('author') border-red-400 @else border-gray-300 @enderror"
                                    value="{{ old('author', $book->author) }}">
                                </div>

                                <div class="col-span-6">
                                  <label for="url" class="block text-sm font-medium text-gray-700">URL</label>
                                  <input type="text" name="url" id="url" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md @error('url') border-red-400 @else border-gray-300 @enderror"
                                    value={{ old('url', $book->url) }}>
                                </div>

                              </div>
                            </div>
                            <div class="px-2 py-3 bg-gray-50 text-right sm:px-6 grid grid-cols-8 gap-x-4">
                              <a class="col-span-2 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-400 hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
                                href="{{ route('books.index') }}">{{ __('Back') }}</a>
                              <div class="col-span-2 ">&nbsp;</div>
                              <div class="col-span-2 ">&nbsp;</div>

                              <button type="submit"
                                class="col-span-2 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{__('Register')}}
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                </div>
            </div>
        </div>
    </div>


</x-app-layout>




