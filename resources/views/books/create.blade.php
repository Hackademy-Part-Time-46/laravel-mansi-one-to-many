<form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="Inserisci nome">
    <input type="text" name="pages" placeholder="Inserisci pagina">
    <input type="file" name="image">

    <select name="author_id">
        @foreach ($authors as $author)
            <option value="{{ $author->id }}">{{ $author->name }} {{ $author->surname }}</option>
        @endforeach
    </select>
    <button type="submit">Salva</button>
</form>
