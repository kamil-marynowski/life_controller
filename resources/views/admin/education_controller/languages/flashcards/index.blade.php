@extends('layout.app')

@section('content')
    <header>
        <h1 class="text-2xl">Flashcards - {{ $language->name }}</h1>
    </header>
    <a href="{{ route('education_controller.languages.flashcards.create', ['language' => $language]) }}">
        Create new flashcard
    </a>
    <table class="w-full table-auto border">
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Category</th>
                <th>Base language</th>
                <th>Learn language</th>
                <th>Pronunciation</th>
            </tr>
        </thead>
        <tbody>
            @if(empty($flashcards))
                <tr>
                    <td colspan="6" style="text-align: center;">No flashcards found.</td>
                </tr>
            @else
                @foreach($flashcards as $flashcard)
                    <tr>
                        <td>{{ $flashcard->id }}</td>
                        <td>{{ $flashcard->type->name }}</td>
                        <td>{{ $flashcard->category->name }}</td>
                        <td>{{ $flashcard->base_language->name }}</td>
                        <td>{{ $flashcard->learn_language->name }}</td>
                        <td>{{ $flashcard->pronuncation }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
