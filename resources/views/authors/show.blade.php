Nome: {{ $author->name }}
Cognome: {{ $author->surname }}
Eta: {{ $author->age }}
----


<ul>
    @foreach ($author->books as $book)
        <li>{{ $book->name }}</li>
    @endforeach
</ul>
