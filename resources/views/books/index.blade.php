<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestionale Libro</title>
</head>

<body>
    <a href="{{ route('book.create') }}">Crea Nuovo libro</a>
    <ul>
        @foreach ($books as $book)
            <li>
                <img height="50" src="{{ Storage::url($book->image) }}" alt="">

                {{ $book->name }} |
                <a href="{{ route('authors.show', ['author' => $book->author_id]) }}">{{ $book->author->name }}
                    {{ $book->author->surname }} {{ $book->author->age }}</a>
            </li>
        @endforeach
    </ul>
</body>

</html>
