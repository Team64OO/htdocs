@extends('layout')

@section('body')
    @include('insertBox')
    @include('updateBox')
    @include('deleteBox')
    @includeWhen($_SESSION['role'] == 'user', 'table')
    @includeWhen($_SESSION['role'] == 'admin', 'adminTable')
    <button onclick="showInsert()">Insert</button>
@endsection