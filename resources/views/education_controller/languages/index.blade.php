@extends('layout.app')

@section('content')
    <header>
        <h1>Languages</h1>
    </header>
    @foreach($languages as $language)
        @if($loop->iteration % 3 === 1)
            <div class="columns-3">
        @endif
        <a href="{{ route('education_controller.languages.show', ['language' => $language]) }}">
            <div>
                <h2>{{ $language->name }} - {{ $language->code }}</h2>
            </div>
        </a>
        @if($loop->iteration % 3 === 0)
            </div>
        @endif
    @endforeach
@endsection
