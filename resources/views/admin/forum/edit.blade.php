
@extends('admin.layouts.app')

@section('title', 'Editar Dúvida')

@section('header')
    <h1 class="text-lg text-black-500">Editar Dúvida</h1>
@endsection

@section('content')


<form action="{{ route('forum.update', $forum->id) }}" method="POST">
    @method('PUT')
    @include('admin.forum.partials.form', [
        'forum' => $forum
    ])
</form>

@endsection
