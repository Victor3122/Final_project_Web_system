@extends('layouts.app')

@section('content')
    <h1>Edit Invoice</h1>

    <form method="POST" action="{{ route('invoices1.update', $invoice->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $invoice->name) }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" rows="5">{{ old('description', $invoice->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="amount">Amount:</label>
            <input type="number" step="0.01" name="amount" id="amount" value="{{ old('amount', $invoice->amount) }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email', $invoice->email) }}">
        </div>

        <div class="form-check">
            <input type="checkbox" name="is_paid" id="is_paid" class="form-check-input" value="1" {{ old('is_paid', $invoice->is_paid) ? 'checked' : '' }}>
            <label for="is_paid" class="form-check-label">Is Paid?</label>
        </div>

        <button type="submit" class="btn btn-primary">Update Invoice</button>
    </form>
@endsection