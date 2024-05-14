@extends('layout.app')

@section('content')
    <header>
        <h1>Create new language</h1>
    </header>
    <div>
        <form action="{{ route('education_controller.languages.store') }}" method="post">
            @csrf
            <div>
                <label for="name">Name</label>
                <input id="name" type="text" name="name" maxlength="255" required>
            </div>
            <div>
                <label for="code">Code</label>
                <input id="code" type="text" name="code" maxlength="7" required>
            </div>
            <div>
                <button type="submit">Create</button>
            </div>
        </form>
    </div>
@endsection
