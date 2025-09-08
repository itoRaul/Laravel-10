<h1>Detalhes do forum {{ $forum->id }}</h1>

<ul>
    <li>{{ $forum->subject}}</li>
    <li>{{ $forum->status}}</li>
    <li>{{ $forum->body }}</li>
</ul>

<form action="{{ route('forum.destroy', $forum->id) }}" method="post">
    @method('DELETE')
    @csrf()
    <button type="submit">Deletar</button>
</form>