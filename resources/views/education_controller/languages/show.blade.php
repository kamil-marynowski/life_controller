@extends('layout.app')

@section('content')
    <header>
        <h1>{{ $language->name }}</h1>
    </header>
    <a href="{{ route('education_controller.languages.flashcards.index', ['language' => $language]) }}">
        Flashcards
    </a>
@endsection
