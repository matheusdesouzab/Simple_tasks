@extends('layouts.app')

@section('title', 'Listagem')

@section('content')
    Seja bem vindo ao Simple Tasks {{ Auth()->user()->name }}
@endsection
