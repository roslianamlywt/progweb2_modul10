@extends('layouts.app')

@section('title','Page Title')

@section('sidebar')
    @parent

        <p>Ini disisipkan ke master sidebar.</p>

@endsection

@section('content')
    <p>Ini body content.</p>

@endsection