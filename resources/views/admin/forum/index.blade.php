<h1>Listagem do forum</h1>

<a href="{{ route('forum.create') }}">Criar Novo Fórum</a>

<table>
    <thead>
        <th>assunto</th>
        <th>status</th>
        <th>descrição</th>
        <th></th>
    </thead>
    <tbody>
        @foreach ($forums->items() as $forum)
        <tr>
            <td>{{ $forum->subject }}</td>
            <td>{{ getStatusForum($forum->status) }}</td>
            <td>{{ $forum->body }}</td>
            <td>
                <a href="{{ route('forum.show', $forum->id) }}">Ver</a>
                <a href="{{ route('forum.edit', $forum->id) }}">Editar</a>
            </td>
        </tr>    
        @endforeach
    </tbody>
</table>

<x-pagination :paginator="$forums" :appends="$filters"/>
