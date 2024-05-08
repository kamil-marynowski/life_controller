@extends('layout.app')

@section('content')
    <header>
        <h1>Wallets</h1>
    </header>
    <div>
        <a href="{{ route('cash_controller.wallets.create') }}" title="Create new wallet">
            Create new wallet
        </a>
    </div>
    <div>
        <table class="table table-auto">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Cash</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($wallets as $wallet)
                    <tr>
                        <td>{{ $wallet->name }}</td>
                        <td>{{ number_format($wallet->cash, 2, '.', '') }} zł</td>
                        <td>
                            <a href="{{ route('cash_controller.wallets.edit', ['wallet' => $wallet]) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
