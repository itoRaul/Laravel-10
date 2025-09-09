@extends('admin.layouts.app')

@section('title', "Detalhes da Dúvida")

@section('header')
    <h1 class="text-lg text-black-500">Detalhes da Dúvida</h1>
@endsection


@section('content')

<ul>
    <li>Título: {{ $forum->subject}}</li>
    <li>Status: {{ $forum->status}}</li>
    <li>Detalhes:{{ $forum->body }}</li>
</ul>

<form action="{{ route('forum.destroy', $forum->id) }}" method="post">
    @method('DELETE')
    @csrf()
    <button type="submit"class="px-4 py-2 bg-red-600 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
        Deletar
    </button>
</form>


@endsection

