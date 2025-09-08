<h1>Editar forum {{ $forum->id }}</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<form action="{{ route('forum.update', $forum->id) }}" method="POST">
    @csrf()
    @method('PUT')
    {{-- <input type="hidden" value="PUT" name="_method"> --}}
    <input type="text" placeholder="Assunto" name="subject" value="{{ $forum->subject}}">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição">{{ $forum->body }}</textarea>
    <button type="submit">Enviar</button>
</form>

