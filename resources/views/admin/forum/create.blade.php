
@extends('admin.layouts.app')

@section('title', 'Criar novo tópico')

@section('header')
    <h1 class="text-lg text-black-500">Nova Dúvida</h1>
@endsection

@section('content')

<form action="{{ route('forum.store') }}" method="POST">
    @include('admin.forum.partials.form')
</form>

@endsection