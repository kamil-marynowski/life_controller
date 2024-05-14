@extends('layout.app')

@section('content')
    <header>
        <h1>Create new flashcard</h1>
    </header>
    <form clas="w-full" action="" method="post">
        @csrf
        <div class="columns-4">
            <div class="w-full">
                <label class="w-full" for="type">Type</label>
                <select class="w-full">
                    <option>Word</option>
                    <option>Phrase</option>
                    <option>Sentence</option>
                </select>
            </div>
            <div class="w-full">
                <label class="w-full" for="category">Category</label>
                <select class="w-full">
                    <option>Clothes</option>
                    <option>Test</option>
                </select>
            </div>
            <div class="w-full">
                <label class="w-full" for="base-language">Base language</label>
                <input class="w-full" id="base-language" type="text" value="{{ $language->name }}" readonly>
            </div>
            <div class="w-full">
                <label class="w-full" for="learn-language">Learn language</label>
                <input class="w-full" id="learn-language" type="text" value="Polish" readonly>
            </div>
        </div>
        <div class="columns-2">
            <div>
                <label for="base-language-content">Base language content</label>
                <textarea></textarea>
            </div>
            <div>
                <label for="learn-language-content">Learn language content</label>
                <textarea></textarea>
            </div>
        </div>
        @include('layout.tailwind.buttons.primary', ['text' => 'Create'])
    </form>
@endsection
