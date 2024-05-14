@extends('layout.app')

@section('content')
    <header>
        <h1>Languages</h1>
    </header>
    <div>
        <a href="{{ route('education_controller.languages.create') }}" title="Create new language">
            Create new language
        </a>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($languages as $language)
                    <tr>
                        <td>{{ $language->id }}</td>
                        <td>{{ $language->name }}</td>
                        <td>{{ $language->code }}</td>
                        <td>
                            <a href="">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
