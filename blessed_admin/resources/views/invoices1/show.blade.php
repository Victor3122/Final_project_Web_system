@extends('layouts.app')

@section('title', 'Invoice Detail')

@section('content')
    <h1>Invoice Detail</h1>

    <p><strong>Name:</strong> {{ $invoice->name }}</p>
    <p><strong>Description:</strong> {{ $invoice->description }}</p>
    <p><strong>Amount:</strong> {{ $invoice->amount }}</p>
    <p><strong>Email:</strong> {{ $invoice->email }}</p>
    <p><strong>Is Paid:</strong> {{ $invoice->is_paid ? 'Yes' : 'No' }}</p>

    <a href="{{ route('invoices1.edit', $invoice->id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('invoices1.destroy', $invoice->id) }}" method="post" style="display: inline-block">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection