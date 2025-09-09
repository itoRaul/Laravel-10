@extends('admin.layouts.app')

@section('title', 'Fórum')

@section('header')
@include('admin.forum.partials.header', [
    'total' => $forums->total()
])
@endsection

@section('content')
@include('admin.forum.partials.content')

<x-pagination :paginator="$forums" :appends="$filters"/>

@endsection