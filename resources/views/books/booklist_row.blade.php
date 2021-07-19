<li class="m-2 p-0 bg-white rounded-md shadow">
  <a class="block w-full p-2"
    href="{{route('books.show', $book->id)}}" >{{ $book->title }} ({{$book->author}})</a>
</li>
