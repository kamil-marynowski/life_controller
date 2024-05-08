@extends('layout.app')

@section('content')
    <header>
        <h1>Create new wallet</h1>
    </header>
    <div>
        <form id="create-wallet-form" action="{{ route('cash_controller.wallets.store') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            <div>
                <label for="name">Name</label>
                <input id="name" type="text" name="name" maxlength="255" required>
            </div>
            <div>
                <label for="cash">Cash</label>
                <input id="cash" type="number" name="cash" min="0.00" step="0.01" required>
            </div>
            <div>
                <button type="submit">Create</button>
            </div>
        </form>
    </div>
@endsection
